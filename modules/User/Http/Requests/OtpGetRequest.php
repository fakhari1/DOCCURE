<?php

namespace User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtpGetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'otp_token' => ['required', 'exists:otps,token'],
            'verification_code' => ['required', 'exists:otps,verification_code'],
        ];
    }
}
