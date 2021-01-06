<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class downloadpdf extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'downloadpdf';
    protected $fillable = array('file_title','file_name');
}
