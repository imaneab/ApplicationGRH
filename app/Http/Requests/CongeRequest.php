<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CongeRequest extends Request
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
          /*  'type_conge' => 'required',
            'nombre_jours' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'date_retour' => 'required',
            'remarque' => 'required',*/
        ];
    }
}
