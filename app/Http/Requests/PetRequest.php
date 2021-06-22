<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'proprietario' => "bail|required|min:6",
            'nome' => "bail|required",
            'especie' => 'bail|required|min:3|max:15',
            'raca' => 'bail|required|min:3|max:15',
            'nascimento' => 'bail|required|date',
            'endereco' => 'bail|required|min:20',
            'telefone' => 'bail|required',
            'sorte' => 'bail|required|numeric',
        ];
    }
}
