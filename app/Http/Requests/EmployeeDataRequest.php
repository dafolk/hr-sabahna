<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmployeeDataRequest extends FormRequest
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
            'employee_id' => 'required|integer',
            'attendance' => 'required'
        ];
    }

    public function messages() {
        return [
            'employee_id.required' => 'Employee ID is required',
            'employee_id.integer' => 'Employee ID must be integer',
            'attendance.required' => 'Attendance is required'
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(
            response()->json([
                'error' => true,
                'message' => 'Validation Error!',
                'data' => $validator->errors()
            ])
        );
    }
}
