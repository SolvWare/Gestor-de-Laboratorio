<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriaRequest extends FormRequest
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
            'codeM' => 'required | Min:6 | Max:6',
            'nameM' => 'required | Min:5 | Max:60',
            //'numGM' => 'required | Min:1 | Max:1',
        ];
    }
}
