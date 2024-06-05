<?php

namespace Settings\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
        return match ($this->method()) {
            'POST' => [
                'site_name' => ['required'],
                'title' => ['required'],
                'specialization' => ['required'],
                'description' => ['nullable', 'string', 'min:5'],
                'phones' => ['nullable', 'array'],
                'address' => ['required', 'string', 'min:20', 'max:255'],
                'instagram_id' => ['nullable', 'string', 'min:5'],
                'telegram_id' => ['nullable', 'string', 'min:5']
            ],
            default => [],
        };
    }
}
