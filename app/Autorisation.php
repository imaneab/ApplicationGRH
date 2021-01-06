<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'autorisations';
    protected $fillable = array('badgenumber','nombre_jours','date_debut','date_retour','moyen_transport','endroit_mission','situation');
}
