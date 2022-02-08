<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do usuário é obrigório',
            'name.string' => 'Formato do nome do usuário é inválido',
            'email.required' => 'Email do usuário é obrigatório',
            'email.email' => 'Formato do email é inválido'
        ];
    }
}


