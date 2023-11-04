<?php

namespace Scheduling\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return match (strtoupper($this->method())) {
            'POST', 'PUT', 'PATCH' => [
                'appointment_day_id' => ['required', 'exists:appointment_days'],
                'date' => ['required'],
                'start_time' => ['required'],
                'end_time' => ['required'],
                'created_by' => ['required', 'exists:users,id'],
                'description' => ['nullable'],
            ]
        };
    }
}
