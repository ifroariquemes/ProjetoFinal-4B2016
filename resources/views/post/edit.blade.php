@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Editar Post</h2>
            <hr>
            <form action="{{ URL::to('/post/storage') }}" method="post">
              <div class="form-group">
                <div class="form-group">
                  <label for="titulo">Titulo da postagem</label>
                  <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="form-group">
                  <label for="categoria"> Selecione a Categoria</label>
                  <select class="form-control" id="categoria">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                   </select>
                </div> 
                <div class="form-group">
                  <label for="visualizacao">Visualização do Post</label>
                   <select class="form-control" id="visualizacao">
                        <option value="true">Ativo</option>
                        <option value="false">Inativo</option>   
                   </select>
                </div>
                <div class="form-group">
                  <label>Conteudo da postagem</label>
                  <textarea style="resize: none;" class="form-control" name="texto_completo" id="texto" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Salvar <i class="glyphicon glyphicon-ok"></i></button>
            </form>
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
