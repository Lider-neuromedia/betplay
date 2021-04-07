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
            'name' => 'required|string|max:100',
            'document' => 'required|digits_between:8,10|unique:clients,document',
            'email' => 'required|string|email|max:100|unique:clients,email',
            'phone' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'of_legal_age' => 'required|boolean',
            'accept_terms_and_conditions' => 'required|boolean',
            'has_betplay_account' => 'nullable|boolean',
        ];
    }
}
