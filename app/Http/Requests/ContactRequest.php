<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'string', 'email:rfc,filter', 'max:150'],
            'subject' => ['nullable', 'string', 'max:150'],
            'project_type' => ['nullable', 'string', 'max:80'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please provide your name so Haider knows who is getting in touch.',
            'name.min' => 'Your name must be at least 2 characters.',
            'email.required' => 'A valid email address is required so Haider can respond to your message.',
            'email.email' => 'Please enter a valid, active email address.',
            'message.required' => 'Please describe your project, inquiry, or question.',
            'message.min' => 'Please provide a bit more detail (minimum 10 characters).',
        ];
    }
}
