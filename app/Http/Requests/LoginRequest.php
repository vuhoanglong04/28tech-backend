<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "email" => "required | email:rfc,dns",
            "password" => "required | min:5",
        ];
    }
    public function messages(): array
    {
        return [
            "email.required" => "Email is required",
            "email.email" => "Email is not valid",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least :min characters"
        ];
    }
}
