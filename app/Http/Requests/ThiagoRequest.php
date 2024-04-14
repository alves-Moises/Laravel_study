<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThiagoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'numero' => 'required|numeric|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'numero.required' => 'O numero é obrigatorio',
            'numero.numeric' => 'Este campo deve ser preenchido com numero'
        ];
    }
}
