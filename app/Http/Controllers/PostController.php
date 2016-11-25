<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller {

	public function __construct() {
        $this->middleware('auth');
    }

	public function create() {
 	   return view('post.create');
	}
	//'titulo', 'resumo', 'texto_completo', 'categoria',
	public function store(Request $request) {
    	$post = new Post();
        $post = $post->create([
            'titulo' => $request['titulo'],
            'resumo' => substr($request['texto_completo'], 0, 256) . '...',
            'texto_completo' => $request['texto_completo'],
            'categoria' => $request['categoria'],
            'user_id' => $request->user()->id,
        ]);
        \Session::flash('message', 'Post cadastrado com sucesso!');
        return Redirect::to('/');
    }
    public function edit() {
 	   return view('post.edit');
	}

}
