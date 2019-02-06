<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarCliente extends FormRequest
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
            'nombre' => 'required|max:30',
            'apellido' => 'required|max:30',
            'correo' => 'required|email|max:50|unique:clientes,correo,'.$this->cliente_id.',cliente_id',
            'fecha_nacimiento' => 'required' 
        ];
    }
}
