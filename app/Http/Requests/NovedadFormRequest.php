<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovedadFormRequest extends FormRequest
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
            'cuerpo_novedad' => 'required|max:30',
            'tipo_novedad' => 'required|max:25555',
            'fecha_novedad' => 'required|max:30',
            
            
    
        ];
    }
}

