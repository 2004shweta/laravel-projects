<?php

// namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class FormStudentRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      */
//     public function authorize(): bool
//     {
//         return false;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
//      */
//     public function rules(): array
//     {
//         return [
//             //
//         ];
//     }
// }

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormStudentRequest extends FormRequest {
    public function authorize() {
        return true; // Allow the request
    }

    public function rules() {
        return [
            "name" => "required|string|min:3|max:30|regex:/^[A-Za-z\s]+$/",
            "email" => "required|email|unique:form_students",
            "registration_number" => "required|integer|digits_between:1,10",
            "gender" => "required|in:male,female,other",
            "skills" => "required|array|min:1",
            "skills.*" => "in:singing,reading,gymming",
        ];
    }

    public function messages() {
        return [
            "name.required" => "The name field is required.",
            "name.regex" => "Name must contain only letters and spaces.",
            "email.required" => "Email is required.",
            "email.email" => "Please enter a valid email address.",
            "registration_number.required" => "Registration number is required.",
            "gender.required" => "Please select a gender.",
            "skills.required" => "At least one skill must be selected.",
            "skills.*.in" => "Selected skill is not valid.",
        ];
    }
}
