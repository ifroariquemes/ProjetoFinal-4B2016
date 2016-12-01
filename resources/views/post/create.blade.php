@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Novo post</h2>
            <hr>
            {!! Form::open(['method' => 'POST', 'url' => 'post/store']) !!}
              {{ csrf_field() }}
              <div class="form-group">
                <div class="form-group">
                  <label for="titulo">Titulo da postagem</label>
                  <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="form-group">
                  <label for="categoria"> Selecione a Categoria</label>
                  <select class="form-control" id="categoria" name="categoria">
                        <option value=""></option>
                        @foreach($categorias as $categoria)
                          <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                        @endforeach
                   </select>
                </div>             
                <div class="form-group">
                  <label>Conteudo da postagem</label>
                  <textarea style="resize: none;" class="form-control" name="texto_completo" id="texto" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Salvar <i class="glyphicon glyphicon-ok"></i></button>
            {!! Form::close() !!}
            </div>
          </div><!-- /.blog-post -->
          <hr>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->
    <script>
      $(document).ready(function() {
        $("#texto").summernote({
          lang: 'pt-BR',
          height: 300,
          minHeight: 300,
          maxHeight: 300,
          focus: true 
        });
      });
    </script>
@endsection
