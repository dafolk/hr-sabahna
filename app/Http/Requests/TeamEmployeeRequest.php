<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TeamEmployeeRequest extends FormRequest
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
            "team_id" => "required",
            "employee_id" => "required"
        ];
    }

    public function messages() {
        return [
            "team_id.required" => "Team ID is required",
            "employee_id.required" => "Employee ID is required"
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(
            response()->json([
                "error" => true,
                "message" => "Validation Error",
                "data" => $validator->errors()
            ])
        );
    } 
}
