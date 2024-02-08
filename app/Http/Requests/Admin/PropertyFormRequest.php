<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
            'title' => ['required', 'min:8'],
            'description' => ['required', 'min:8'],
            'surface' => ['required', 'integer', 'min:10'],
            'rooms' => ['required', 'integer', 'min:1'],
            'bedrooms' => ['required', 'integer', 'min:0'],
            'floor' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'integer', 'min:0'],
            'city' => ['required', 'min:3'],
            'address' => ['required', 'min:8'],
            'postal_code' => ['required', 'min:3'],
            'sold' => ['required', 'boolean'],
            'options' => ['array', 'exists:options,id', 'required']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Ce champ est obligatoire',
            'title.min' => 'Le titre doit être au moins 8 caratères',
            'description.required' => 'Ce champ est obligatoire',
            'description.min' => 'La description doit être au moins 8 caratères',
            'surface.required' => 'Ce champ est obligatoire',
            'rooms.required' => 'Ce champ est obligatoire',
            'bedrooms.required' => 'Ce champ est obligatoire',
            'floor.required' => 'Ce champ est obligatoire',
            'price.required' => 'Ce champ est obligatoire',
            'city.required' => 'Ce champ est obligatoire',
            'address.required' => 'Ce champ est obligatoire',
            'postal_code.required' => 'Ce champ est obligatoire',
            'sold.required' => 'Ce champ est obligatoire',
        ];
    }
}
