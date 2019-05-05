<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorarioRequest extends FormRequest
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
            'id_lab',
            'dia' => 'required | Min: 5| Max:9',
            'hora_ini'  => 'required | Min:8 | Max:8',
            'hora_fin'  => 'required | Min:8 | Max:8'
        ];
    }
}
