<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FonctionnaireRequest extends Request
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
            'badgenumber' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'fonction' => 'required',
            'division' => 'required',
            'genre' => 'required',
            'CIN' => 'required',
            'service' => 'required',
            'date_affectation' => 'required',
            'date_entree_administration' => 'required',
            'grade' => 'required',
            'date_grade' => 'required',
            'echelle' => 'required',
            'echelon' => 'required',
            'date_echelon' => 'required',
            'situation_familiale' => 'required',
            'budget' => 'required',
           // 'niveau_scolaire' => 'required',
            'nombre_enfants' => 'required',
            'nom_complet_conjoint' => 'required',
            'fonction_conjoint' => 'required',
           // 'diplome' => 'required',
           // 'nom_pere' => 'required',
           // 'nom_mere' => 'required',
          //  'remarque' => 'required',
        ];
    }
}
