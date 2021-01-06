<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'conges';
    protected $fillable = array('badgenumber','type_conge','nombre_jours','nombre_jours_consomes','nombre_jours_restants','date_debut','date_fin','date_retour','remarque','situation');
}
