<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBusinessRequest extends FormRequest
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
            'business_name' => ['sometimes', 'required', 'string', 'max:255'], // Validates only if the key exists
            'business_email' => ['sometimes', 'required', 'string', 'email', 'max:255'],
            'business_description' => 'nullable|string', // Optional field
            'business_number' => [
                'sometimes',
                'required',
                'string',
                'regex:/^\+?[0-9]{10,15}$/', //   
                'max:15',
                Rule::unique('businesses', 'business_number')->ignore($this->route('business')), // Adjust the `id` as per your input

            ],
            'category_id' => 'sometimes|required|exists:categories,id', // Category ID is required if present            
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
            'business_name.required' => 'The business name is required.',
            'category.required' => 'The category is required.',
            'business_number.regex' => 'The business number must be a valid phone number with 10 to 15 digits and may start with a +.',
        ];
    }
}
