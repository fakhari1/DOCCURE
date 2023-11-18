<?php

namespace Scheduling\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Morilog\Jalali\Jalalian;
use Scheduling\Models\OpenDate;

class OpenDateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return match (strtoupper($this->method())) {
            'POST', 'PUT', 'PATCH' => [
                'start_date' => ['required', 'numeric', function ($attr, $value, $fail) {
                    $date = OpenDate::where('date', '=', get_timestamp_gregory_date($value)->format('Y-m-d'))->first();

                    if ($date) {
                        return $fail("تاریخ شروع" . get_timestamp_jalali_date($value)->format('Y/m/d') . " در سیستم ثبت شده!");
                    }
                }],
                'end_date' => ['required', 'numeric', function ($attr, $value, $fail) {
                    $date = OpenDate::where('date', '=', get_timestamp_gregory_date($value)->format('Y-m-d'))->first();

                    if ($date) {
                        return $fail("تاریخ پایان" . get_timestamp_jalali_date($value)->format('Y/m/d') . "در سیستم ثبت شده!");
                    }
                }],
                'holidays' => ['nullable', 'array', function ($attr, $value, $fail) {
                    foreach ($value as $key => $d) {
                        $date = OpenDate::where('date', '=', get_timestamp_gregory_date($d)->format('Y-m-d'))->first();

                        if ($date && $date->is_holiday) {
                            return $fail("تاریخ تعطیل" . get_timestamp_jalali_date($d)->format('Y/m/d') . "به عنوان روز تعطیل در سیستم ثبت شده!");
                        }
                    }
                }],
                'morning_start_time' => [Rule::requiredIf(function () {
                    if ($this->morning_end_time or !$this->evening_start_time or !$this->evening_end_time) return true;
                }), 'date_format:H:i'],
                'morning_end_time' => [Rule::requiredIf(function () {
                    if ($this->morning_start_time or !$this->evening_end_time or !$this->evening_start_time) return true;
                }), 'date_format:H:i'],
                'evening_start_time' => [Rule::requiredIf(function () {
                    if ($this->evening_end_time or !$this->morning_end_time or !$this->morning_start_time) return true;
                }), 'date_format:H:i'],
                'evening_end_time' => [Rule::requiredIf(function () {
                    if ($this->evening_start_time or !$this->morning_start_time or !$this->morning_end_time) return true;
                }), 'date_format:H:i'],
                'duration' => ['required', 'numeric']
            ]
        };
    }
}
