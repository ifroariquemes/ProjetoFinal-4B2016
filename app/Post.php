<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';

    protected $fillable = ['titulo', 'resumo', 'texto_completo', 'user_id', 'categoria_id'];
    
}
