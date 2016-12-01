@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-sm-12">

            <div class="blog-post">
                <h2 class="blog-post-title">Editar categoria</h2>
                <hr>
                {!! Form::model($categoria, ['method' => 'PATCH', 'url' => 'categoria/'.$categoria->id.'/update']) !!}
                    <div class="form-group">
                        <div class="form-group">
                            <label for="titulo">Categoria</label>
                            <input type="text" class="form-control" name="categoria" id="titulo" value='{{ $categoria->categoria }}'>
                        </div>
                    </div>
                    {!! Form::submit('Atualizar', ['class'=>'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div><!-- /.blog-post -->
        <hr>
    </div><!-- /.blog-main -->

</div><!-- /.row -->

</div><!-- /.container -->
@endsection
