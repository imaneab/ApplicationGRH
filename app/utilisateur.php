<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'utilisateurs';
    protected $fillable = array('badgenumber','email','password','confirm_password');
}
