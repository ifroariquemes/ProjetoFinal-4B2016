@extends('home')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-sm-12">
			@if(Session::has('message'))
				<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
			@endif
			<br>
			@if( isset($postagens[0]) )
				<table class="table table-striped">
					<thead>
						<th>Titulo</th>
						<th>Desativado por </th>
						<th>Hora da desativação</th>
						<th><span class="pull-right">Ações</span></th>
					</thead>
			@foreach($postagens as $post)
				<tbody>
					<th>{{$post->titulo}}</th>
					<th>{{$post->revisor->name}}</th>
					<th>{{date_format($post->updated_at, 'd-m-Y - H:i')}}</th>
					<th>
				 		<div role="group" class="pull-right">
							<a class="btn btn-danger" href="{{$post->id}}/active">Ativar <span class="glyphicon glyphicon-remove"></span></a>
						</div>
					</th>
				</tbody>
			@endforeach
			</table>
			{!! $postagens->render() !!}
			<br>
			@else
				<br>
				<div class="alert alert-info" role="alert">Nenhum post foi desativado.</div>
			@endif	
		</div>
	</div>
</div>
@stop