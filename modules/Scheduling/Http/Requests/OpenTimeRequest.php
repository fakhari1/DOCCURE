<?php

namespace Scheduling\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpenTimeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return match (strtoupper($this->method())) {
            'POST', 'PUT', 'PATCH' => [

                ],

            default => []
        };
    }
}
