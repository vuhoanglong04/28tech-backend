<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
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
        $rules = [
            "course_name" => "required",
            "price" => "required|numeric|min:1",
            "discount" => "required|numeric|min:1",
            "category_id" => "required",
            "description" => "required",
            "overview" => "required",
            "number_of_sessions" => "required|numeric|min:1"
        ];

        if ($this->isMethod('post')) {
            $rules["course_name"] .= "|unique:courses,course_name";
            $rules["image"] = "required|mimes:jpeg,png,jpg|max:5120";
            $rules["background"] = "required|mimes:jpeg,png,jpg|max:5120";
        } elseif ($this->isMethod('patch')) {
            $rules["image"] = "nullable|mimes:jpeg,png,jpg|max:5120";
            $rules["background"] = "nullable|mimes:jpeg,png,jpg|max:5120";
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            "course_name.required" => "Course name is required.",
            "course_name.unique" => "Course name must be unique.",
            "price.required" => "Price is required.",
            "price.numeric" => "Price must be a number.",
            "price.min" => "Price must be at least 1.",
            "discount.required" => "Discount is required.",
            "discount.numeric" => "Discount must be a number.",
            "discount.min" => "Discount must be at least 1.",
            "category_id.required" => "Category is required.",
            "description.required" => "Description is required.",
            "overview.required" => "Overview is required.",
            "image.required" => "Image is required.",
            "image.mimes" => "Image must be a file of type: jpeg, png, jpg.",
            "image.max" => "Image may not be greater than 5120 kilobytes.",
            "background.required" => "Background image is required.",
            "background.mimes" => "Background image must be a file of type: jpeg, png, jpg.",
            "background.max" => "Background image may not be greater than 5120 kilobytes.",
            "number_of_sessions.required" => "Number of sessions is required.",
            "number_of_sessions.numeric" => "Number of sessions must be a number.",
            "number_of_sessions.min" => "Number of sessions must be at least 1."
        ];
    }
}
