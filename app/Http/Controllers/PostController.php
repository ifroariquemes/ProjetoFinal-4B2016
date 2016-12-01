<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Categoria;
use Redirect;

class PostController extends Controller {

	public function __construct() {
        $this->middleware('auth');
    }

	public function create() {
        $categorias = Categoria::get();
 	    return view('post.create')->with('categorias', $categorias);
	}

	//'titulo', 'resumo', 'texto_completo', 'categoria',
	public function store(Request $request) {
    	$post = new Post();
        $post = $post->create([
            'titulo' => $request['titulo'],
            'resumo' => strip_tags(substr($request['texto_completo'], 0, 256)) . '...',
            'texto_completo' => $request['texto_completo'],
            'ativo' => '1',
            'user_id' => $request->user()->id,
            'categoria_id' => $request['categoria'],
        ]);
        \Session::flash('message', 'Post cadastrado com sucesso!');
        return Redirect::to('/');
    }
    public function edit() {
 	   return view('post.edit');
	}

    public function update() {

    }

    public function disable() {

    }

}
