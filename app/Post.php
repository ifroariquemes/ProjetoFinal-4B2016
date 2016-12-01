<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';

    protected $fillable = ['titulo', 'resumo', 'texto_completo', 'ativo', 'autor_id', 'revisor_id', 'categoria_id'];

    public function autor() {
    	return $this->belongsTo('App\User', 'autor_id');
	}

	public function revisor() {
    	return $this->belongsTo('App\User', 'revisor_id');
	}
    
}
