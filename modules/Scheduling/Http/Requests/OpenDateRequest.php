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
            'POST' => [
                'start_date' => ['required', 'numeric', function ($attr, $value, $fail) {
                    $date = OpenDate::where('date', '=', get_timestamp_gregory_date($value)->format('Y-m-d'))->first();
                    if ($date) {
                        return $fail("تاریخ شروع" . get_timestamp_jalali_date($value)->format('Y/m/d') . " در سیستم ثبت شده!");
                    } else return true;
                }],
                'end_date' => ['required', 'numeric', function ($attr, $value, $fail) {
                    $date = OpenDate::where('date', '=', get_timestamp_gregory_date($value)->format('Y-m-d'))->first();

                    if ($date) {
                        return $fail("تاریخ پایان" . get_timestamp_jalali_date($value)->format('Y/m/d') . "در سیستم ثبت شده!");
                    } else return true;
                }],
                'holidays' => ['nullable', 'array', function ($attr, $value, $fail) {
                    if (is_array($value)) {
                        foreach ($value as $key => $d) {
                            $date = OpenDate::where('date', '=', get_timestamp_gregory_date($d)->format('Y-m-d'))->first();

                            if ($date && $date->is_holiday) {
                                return $fail("تاریخ تعطیل" . get_timestamp_jalali_date($d)->format('Y/m/d') . "به عنوان روز تعطیل در سیستم ثبت شده!");
                            } else return true;
                        }
                    }
                }],
                'morning_start_time' => ['nullable', 'date_format:H:i'],
                'morning_end_time' => ['nullable', 'date_format:H:i'],
                'evening_start_time' => ['nullable', 'date_format:H:i'],
                'evening_end_time' => ['nullable', 'date_format:H:i'],
                'duration' => ['required', 'numeric']
            ],
            'PUT', 'PATCH' => [
                'morning_start_time' => ['nullable', 'date_format:H:i'],
                'morning_end_time' => ['nullable', 'date_format:H:i'],
                'evening_start_time' => ['nullable', 'date_format:H:i'],
                'evening_end_time' => ['nullable', 'date_format:H:i'],
                'duration' => ['required', 'numeric']
            ],
            default => []
        };
    }
}
