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
            'laboratorio_id' => 'required|integer',
            'materia_id' => 'required|integer',
            'diaH' => 'required | Min:5 | Max:9',
            'periodoH' => 'required | Min:13 | Max:13',
        ];
    }
}
