<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContestantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'document' => 'required|digits_between:6,10|unique:clients,document',
            'email' => 'required|string|email|max:50|unique:clients,email',
            'phone' => 'required|string|max:30',
            'address' => 'required|string|max:100',
            'of_legal_age' => 'required|boolean',
            'accept_terms_and_conditions' => 'required|boolean',
            'has_betplay_account' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo obligatorio.',
            'document.required' => 'Campo obligatorio.',
            'email.required' => 'Campo obligatorio.',
            'phone.required' => 'Campo obligatorio.',
            'address.required' => 'Campo obligatorio.',
            'of_legal_age.required' => 'Campo obligatorio.',
            'accept_terms_and_conditions.required' => 'Campo obligatorio.',
            'document.unique' => 'Número de cédula ya usado.',
            'email.unique' => 'Correo ya usado.',
        ];
    }
}
