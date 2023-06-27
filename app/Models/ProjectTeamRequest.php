<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProjectTeamRequest extends Model
{
    use HasFactory;

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
