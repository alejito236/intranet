<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManualFormRequest extends FormRequest
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
            'cuerpo_manual' => 'required|max:30',
            'tipo_manual' => 'required|max:25555',
            'fecha_manual' => 'required|max:30',
            
            
    
        ];
    }
}
