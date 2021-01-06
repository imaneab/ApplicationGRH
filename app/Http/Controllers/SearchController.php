<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\search;
use Input;

class SearchController extends Controller
{
   /* public function index(){
        return view('search.search');
    }

    public function chercher(Request $request){
        $term=$request->term;
        $data=Fonctionnaire::where('badgenumber','LIKE','%'.$term.'%')
        ->take(10)
        ->get();
        $result=array();
            foreach($data as $key => $v){
                $result[]=['id'=>$v->id,'value'=>$v->badgenumber];
                }
              
              /* $output.='<tr>'.
             '<td>'.$fonctionnaires->id.'</td>'.
                '<td>'.$fonctionnaires->badgenumber.'</td>'.
                '<td>'.$fonctionnaires->nom.'</td>'.
                '<td>'.$fonctionnaires->prenom.'</td>'.
                '<td>'.$fonctionnaires->fonction.'</td>'.
                '<td>'.$fonctionnaires->division.'</td>'.
                '<td>'.$fonctionnaires->genre.'</td>'.
                '<td>'.$fonctionnaires->CIN.'</td>'.
                '<td>'.$fonctionnaires->service.'</td>'.
                '<td>'.$fonctionnaires->date_affectation.'</td>'.
                '<td>'.$fonctionnaires->date_entree_administration.'</td>'.
                '<td>'.$fonctionnaires->grade.'</td>'.
                '<td>'.$fonctionnaires->date_grade.'</td>'.
                '<td>'.$fonctionnaires->echelle.'</td>'.
                '<td>'.$fonctionnaires->echelon.'</td>'.
                '<td>'.$fonctionnaires->date_echelon.'</td>'.
                '<td>'.$fonctionnaires->situation_familiale.'</td>'.
                '<td>'.$fonctionnaires->budget.'</td>'.
                '<td>'.$fonctionnaires->niveau_scolaire.'</td>'.
                '<td>'.$fonctionnaires->nombre_enfants.'</td>'.
                '<td>'.$fonctionnaires->nom_complet_conjoint.'</td>'.
                '<td>'.$fonctionnaires->fonction_conjoint.'</td>'.
                '<td>'.$fonctionnaires->diplome.'</td>'.
                '<td>'.$fonctionnaires->nom_pere.'</td>'.
                '<td>'.$fonctionnaires->nom_mere.'</td>'.
                '<td>'.$fonctionnaires->remarque.'</td>'.
                '</tr>';
            }
            return response()->json($result);
}*/

    }
