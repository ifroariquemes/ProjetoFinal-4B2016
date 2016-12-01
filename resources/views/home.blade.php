@extends('layouts.app')

@section('content')
<div class="container">
      @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
      @endif
      <div class="blog-header">
        <h1 class="blog-title">BloGamers</h1>
        <p class="lead blog-description">O blog dos gamers, posts de league of legends, World of warcraft etc.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
        @if( isset($posts[0]) )
          @foreach($posts as $post)
            <div class="blog-post">
              <h2 class="blog-post-title">{{ $post->titulo }}</h2>
              <p class="blog-post-meta">Postado por <b>{{ $post->autor->name }}</b>, às {{ date_format($post->created_at, 'H:i - 
              d-m-Y') }}</p>
              <p class="blog-post-meta">Revisto por <b>{{ $post->revisor->name }}</b>, às {{ date_format($post->updated_at, 'H:i - d-m-Y') }}</p>
              <hr>
              {{ $post->resumo }}
              <p></p>
              @if (Auth::guest())
                <a class="btn btn-primary" href="home/{{$post->id}}/read">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>
              @else
                <a class="btn btn-primary" href="home/{{$post->id}}/read">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>
                <a class="btn btn-success" href="post/{{$post->id}}/edit">Editar <span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-danger" href="post/{{$post->id}}/disable">Desativar <span class="glyphicon glyphicon-remove"></span></a>
              @endif
            </div><!-- /.blog-post -->
          @endforeach
          <hr>
          {!! $posts->render() !!}
        @else
          <div class="alert alert-info" role="alert">Nenhum post foi cadastrado.</div>
        @endif 

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          @if (Auth::guest())
            <div class="sidebar-module">
              <h4>Categorias</h4>
              <ol class="list-unstyled">
              @if (isset($categorias[0]))
                @foreach($categorias as $categoria)
                  <li><a href="{{ url('/home/'.$categoria->id) }}">{{$categoria->categoria}}</a></li>
                @endforeach
              @else
                <li>Sem categorias</li>
              @endif
              </ol>
            </div>
          @else
            <div class="sidebar-module sidebar-module-inset">
              <h4>Gerenciar post's</h4>
              <a class="btn btn-primary" href="{{ url('/post/create') }}">Novo post <span class="glyphicon glyphicon-pencil"></span></a>
              <br><br>
              <a class="btn btn-warning" href="{{ url('/post/desactives') }}">Post's desativados <span class="glyphicon glyphicon-th-list"></span></a>
            </div>
            <div class="sidebar-module">
              <h4>Categorias</h4>
              <ol class="list-unstyled">
              @if (isset($categorias[0]))
                @foreach($categorias as $categoria)
                  <li><a href="{{ url('/home/'.$categoria->id) }}">{{$categoria->categoria}}</a></li>
                @endforeach
              @else
                <li>Sem categorias</li>
              @endif
              </ol>
            </div>
          @endif
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
