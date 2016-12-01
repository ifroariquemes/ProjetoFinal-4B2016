<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null) {
        if($id == null) {
            $posts = Post::where('ativo', '=', 1)->orderBy('created_at', 'desc')->paginate(20);
        } else {
            $posts = Post::where([['ativo', '=', 1],['categoria_id', '=', $id]])->orderBy('created_at', 'desc')->paginate(20);
        }
        $categorias = Categoria::get();
        return view('home')->with(['posts' => $posts, 'categorias' => $categorias]);
    }

    public function read($id){
        $post = Post::get()->find($id);
        return view('post.read')->with('post', $post);
    }
}
