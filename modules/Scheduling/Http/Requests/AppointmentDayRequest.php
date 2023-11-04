<?php

namespace Scheduling\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Scheduling\Models\AppointmentDay;

class AppointmentDayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return match (strtoupper($this->method())) {
            'POST', 'PUT', 'PATCH' => [
                'date' => ['required'],
                'day_of_month' => ['required', 'numeric', 'gte:1', 'lteL:31'],
                'is_available' => ['nullable', 'boolean'],
                'reason_of_unavailable' => [Rule::requiredIf(fn() => $this->is_available == 0)],
                'appointment_duration' => ['required', 'in:' . AppointmentDay::$durations],
                'has_morning_turn' => ['required', 'boolean', Rule::requiredIf(fn() => $this->is_available == 1)],
                'morning_start_time' => [Rule::requiredIf(fn() => $this->has_morning_turn == 1)],
                'morning_end_time' => [Rule::requiredIf(fn() => $this->has_morning_turn == 1 && !empty($this->morning_start_time))],
                'has_evening_turn' => ['required', 'boolean', Rule::requiredIf(fn() => $this->is_available == 0)],
                'evening_start_time' => [Rule::requiredIf(fn() => $this->has_evening_turn == 1)],
                'evening_end_time' => [Rule::requiredIf(fn() => $this->has_evening_turn == 1 && !empty($this->evening_start_time))],
            ],
            default => [],
        };
    }
}
