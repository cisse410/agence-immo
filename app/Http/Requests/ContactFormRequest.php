<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['required', 'string', 'min:3'],
            'lastname' => ['required', 'string', 'min:3'],
            'phone' => ['required', 'string', 'min:9'],
            'email' => ['required', 'email', 'min:4'],
            'message' => ['required', 'string', 'min:15'],
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Le prénom est obligatoire',
            'firstname.min' => 'Le prénom saisi doit être au moins 5 caractères',
            'lastname.required' => 'Le nom est obligatoire',
            'lastname.min' => 'Le nom saisi doit être au moins 5 caractères',
            'email.email' => 'Saisir un mail valide',
            'email.required' => 'L\'email est est obligatoire',
            'message.required' => 'Saisir au moins 15 caractères'
        ];
    }
}
