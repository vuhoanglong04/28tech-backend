<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassesRequest extends FormRequest
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
            "course_id" => "required",
            "teacher_id" => "required",
            "schedule" => "required"
        ];

        if ($this->isMethod('patch')) {
            $rules['class_name'] = 'required';
            $rules['date_start'] = 'nullable|date|after:today';
            $rules['time_study'] = 'nullable';
        } else {
            $rules['class_name'] = 'required|unique:classes,class_name';
            $rules['date_start'] = 'required|date|after:today';
            $rules['time_study'] = 'required';
        }

        return $rules;
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'class_name.required' => 'Class name is required.',
            'class_name.unique' => 'Class name must be unique.',
            'course_id.required' => 'Course ID is required.',
            'teacher_id.required' => 'Teacher ID is required.',
            'date_start.required' => 'Start date is required.',
            'date_start.date' => 'Start date must be a valid date.',
            'date_start.after' => 'Start date must be a date after today.',
            'time_study.required' => 'Time study is required.',
            'schedule.required' => 'Schedule is required.',
        ];
    }
}
