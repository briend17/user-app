<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UpdateUserRequest extends FormRequest
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
            'nombres' => 'required|string|max:100|min:5',
            'apellidos' => 'required|string|max:100',
            'direccion' => 'required|string|max:180',
            'celular' => 'required|numeric|max:10|min:10',
            'cedula' => 'required|numeric|max:10',
            'email' => 'required|string|email|max:150|unique:users,email,'.$this->route('dashboard')->id,
        ];
    }
}
