<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProjectTeamRequest extends FormRequest
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
            "project_id" => "required|integer",
            "team_id" => "required|integer"
        ];
    }

    public function messages()
    {
        return [
            "project_id.integer" => "Project Id must be integer",
            "project_id.required" => "Project Id Field is required",
            "team_id.integer" => "Team Id must be integer",
            "team_id.required" => "Team Id Field is required",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            "error" => true,
            "message" => "Validation errors",
            "data" => $validator->errors()
        ]));
    }
}
