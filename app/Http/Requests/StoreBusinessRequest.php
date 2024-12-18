<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusinessRequest extends FormRequest
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
            'business_name' => 'required|string|max:255',
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
        ];
    }
}
