<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestStore extends FormRequest
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
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|unique:posts',
            'subtitle'=> 'nullable|string',
            'text'=> 'required',
            'image' => 'required|string'

        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'É necessário informar o usuário dono do post',
            'user_id.integer' => 'O id do usuário deve ser um inteiro',
            'user_id.exists' => 'O id do usuário deve existir na tabela de usuários',
            'title.required' => 'É necessário um título',
            'title.string' => 'O título deve ser uma string',
            'title.unique' => 'Este título já existe',
            'subtitle.string' => 'O subtítulo deve ser uma string',
            'text.required' => 'O texto da matéria não pode ficar em branco',
        ];
    }
}
