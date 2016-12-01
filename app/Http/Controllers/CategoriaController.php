<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categoria;

use Redirect;

class CategoriaController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
    	$categorias = Categoria::get();
    	return view('categoria.index')->with('categorias', $categorias);
    }

    public function create() {
    	return view('categoria.create');
    }

    public function store(Request $request) {
    	$categoria = new Categoria();
        $categoria = $categoria->create([
            'categoria' => $request['categoria'],
        ]);
        \Session::flash('message', 'Categoria cadastrada com sucesso!');
        return Redirect::to('categoria/index');
    }

    public function edit($id) {
        $categoria = Categoria::get()->find($id);
        return view('categoria.edit')->with('categoria', $categoria);
    }

    public function update($id, Request $request) {
        $categoria = Categoria::get()->find($id);
        $categoria->update(['categoria' => $request['categoria'],]);
        \Session::flash('message', 'Categoria atualizada com sucesso!');
        return Redirect::to('categoria/index');
    }

    public function destroy($id) {
        $categoria = Categoria::get()->find($id);
        $categoria->delete();
        \Session::flash('message', 'Categoria apagado com sucesso!');
        return Redirect::to('categoria/index');
    }

}
