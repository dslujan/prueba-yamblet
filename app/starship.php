<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class starship extends Model
{
    protected $table = 'starships';
    protected $fillable = ['id_api', 'name', 'modelo', 'manufacturer'];
}
