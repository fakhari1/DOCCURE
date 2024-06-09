<?php

namespace Comment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCommentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check()==true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'body'=> ['required'],
            'parent_id' => ['nullable'],
        ];
    }
}
