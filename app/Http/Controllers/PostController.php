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
        $textosemtag = strip_tags($request['texto_completo']);
        $post = $post->create([
            'titulo' => $request['titulo'],
            'resumo' => substr($textosemtag, 0, 230) . "...",
            'texto_completo' => $request['texto_completo'],
            'ativo' => '1',
            'autor_id' => $request->user()->id,
            'revisor_id' => $request->user()->id,
            'categoria_id' => $request['categoria'],
        ]);
        \Session::flash('message', 'Post cadastrado com sucesso!');
        return Redirect::to('/home');
    }
    public function edit($id) {
        $post = Post::get()->find($id);
        $categorias = Categoria::get();
 	    return view('post.edit')->with(['post' => $post, 'categorias' => $categorias]);
	}

    public function update($id, Request $request) {
        $post = Post::get()->find($id);
        $textosemtag = strip_tags($request['texto_completo']);
        $post->update([
            'titulo' => $request['titulo'],
            'resumo' => substr($textosemtag, 0, 230) . "...",
            'texto_completo' => $request['texto_completo'],
            'ativo' => $request['ativo'],
            'revisor_id' => $request->user()->id,
            'categoria_id' => $request['categoria'],
        ]);
        \Session::flash('message', 'Post atualizado com sucesso!');
        return Redirect::to('/home');
    }

    public function disable($id, Request $request) {
        $post = Post::get()->find($id);
        $post->update([
            'ativo' => 0,
            'revisor_id' => $request->user()->id,
        ]);
        \Session::flash('message', 'Post desativado com sucesso!');
        return Redirect::to('/home');
    }

    public function active($id, Request $request) {
        $post = Post::get()->find($id);
        $post->update([
            'ativo' => 1,
            'revisor_id' => $request->user()->id,
        ]);
        \Session::flash('message', 'Post ativado com sucesso!');
        return Redirect::to('/home');
    }

    public function desactives(){
        $postagens = Post::where('ativo', '=', 0)->orderBy('updated_at', 'desc')->paginate(10);
        return view('post.desactives')->with('postagens', $postagens);
    }

}
