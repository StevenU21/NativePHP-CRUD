<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:6', 'max:60', Rule::unique('categories')->ignore($this->category)],
            'description' => ['nullable', 'string', 'min:10', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no debe exceder los :max caracteres.',
            'name.unique' => 'El nombre ya está en uso.',
            'description.min' => 'La descripción debe tener al menos :min caracteres.',
            'description.max' => 'La descripción no debe exceder los :max caracteres.',
        ];
    }
}
