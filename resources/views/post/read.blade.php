@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
            <div class="blog-post">
              <h2 class="blog-post-title">{{ $post->titulo }}</h2>
              <p class="blog-post-meta">Postado por <b>{{ $post->autor->name }}</b>, às {{ date_format($post->created_at, 'H:i - 
              d-m-Y') }}</p>
              <p class="blog-post-meta">Revisto por <b>{{ $post->revisor->name }}</b>, às {{ date_format($post->updated_at, 'H:i - d-m-Y') }}</p>
              <hr>
              {{ $post->texto_completo }}
            </div><!-- /.blog-post -->
          
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
