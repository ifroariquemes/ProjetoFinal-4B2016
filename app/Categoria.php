<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'categorias';

    protected $fillable = ['categoria'];

    public function post() {
 	   return $this->belongsTo('App\Post');
	}
}
