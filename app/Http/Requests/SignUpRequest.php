<?php

namespace App\Http\Requests;

use App\Rules\SignUpCheckboxRule;
use App\Rules\VietnamesePhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            "name" => "required",
            "email" => "required | email:rfc,dns",
            "password" => "required | min:5",
            "phone_number" => ["required", new VietnamesePhoneNumber],
            "accepted_policy" => "required"
        ];
    }
    public function messages(): array
    {
        return [
            "name.required" => "Your full name is required",
            "email.required" => "Email is required",
            "email.email" => "Email is not valid",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least :min characters",
            "phone_number.required" => "Phone number is required",
            "accepted_policy.required" => "Please accept our Terms Of Service and Privacy Policy"
        ];
    }
}
