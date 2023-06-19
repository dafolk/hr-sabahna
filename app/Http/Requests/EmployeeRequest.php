<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmployeeRequest extends FormRequest
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
            'fullname' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required|string',
            'position' => 'required|string',
            'salary' => 'required|integer'
        ];
    }

    public function messages() {
        return [
            'fullname.required' => 'Fullname is required',
            'fullname.string' => 'Fullname must be string',
            'email.required' => 'email is required',
            'email.string' => 'email must be string',
            'email.unique' => 'email already used',
            'phone.required' => 'phone number is required',
            'phone.string' => 'phone number must be string',
            'phone.unique' => 'phone number already used',
            'password.required' => 'password is required',
            'password.string' => 'password must be string',
            'position.required' => 'position is required',
            'position.string' => 'position must be string',
            'salary.required' => 'salary is required',
            'salary.integer' => 'salary must be string',
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException (
            response()->json([
                'error' => false,
                'message' => "Validation Error!",
                'data' => $validator->errors()
            ])
        );
    }
}
