<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    protected $table = 'anuncios';
    protected $guarded = ['id'];
	protected $primaryKey = 'id';

}
