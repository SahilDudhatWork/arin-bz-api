<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Set to true if no additional authorization logic is required
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'], // Validates only if the key exists
            'email' => ['sometimes', 'required', 'string', 'email', 'max:255'],
            'number' => [
                'sometimes',
                'required',
                'string',
                'regex:/^\+?[0-9]{10,15}$/', //   
                'max:15',
                Rule::unique('users', 'number')->ignore($this->route('id')), // Adjust the `id` as per your input

            ],
        ];
    }

    /**
     * Customize the validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'email.required' => 'The email  is required.',
            'number.regex' => 'The number must be a valid phone number with 10 to 15 digits and may start with a +.',
        ];
    }
}
