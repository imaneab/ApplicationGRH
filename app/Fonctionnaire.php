<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
   // protected $faillable = ['badgenumber','nom','prenom','fonction','division','genre','CIN','service','date_affectation','date_entree_administration','grade','date_grade','echelle','echelon','date_echelon','situation_familiale','budget','niveau_scolaire','nom_complet_conjoint','fonction_conjoint','nombre_enfants','nom_pere','nom_mere','diplome','remarque'];
  // protected $faillable = 'fonctionnaires';
  protected $primaryKey = 'id';
protected $table = 'fonctionnaires';
protected $fillable = array('badgenumber','nom','prenom','fonction','division','genre','CIN','service','date_affectation','date_entree_administration','grade','date_grade','echelle','echelon','date_echelon','situation_familiale','budget','niveau_scolaire','nom_complet_conjoint','fonction_conjoint','nombre_enfants','nom_pere','nom_mere','diplome','remarque','file_name');
}
