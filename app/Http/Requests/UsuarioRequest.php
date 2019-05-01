<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'codSis'    => 'required | Min:9 | Max:9',
            'ciU'       => 'required | Min:7 | Max:7',
            'nameU'     => 'required | Min:5 | Max:30',
            'lastU'     => 'required | Min:5 | Max:30',
            'rol'       => 'required | Min:5 | Max:30',
            'materia'   => 'required | Min:5 | Max:60',
            'grupo'     => 'required | Min:1 | Max:1'
        ];
    }
}
