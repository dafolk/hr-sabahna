<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AdminRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "fullname" => "required|string",
            "email" => "required|email|unique:admins",
            "password" => "required|string",
            "photo" => "nullable"
        ];
    }

    public function messages()
    {
        return [
            "fullname.required" => "FullName is required",
            "fullname.string" => "FullName must be string",
            "email.required" => "Email is required",
            "email.email" => "Must be email",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            "error" => true,
            "message" => "Validation Errors",
            "data" => $validator->errors()
        ]));
    }
}
