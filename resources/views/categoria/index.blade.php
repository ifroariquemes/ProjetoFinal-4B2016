@extends('home')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-sm-12">
			@if(Session::has('message'))
				<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
			@endif
			<a href="{{ url('/categoria/create') }}" class="btn btn-primary pull-right">Nova categoria</a>
			<br>
			@if( isset($categorias[0]) )
				<table class="table table-striped">
					<thead>
						<th>Categorias</th>
						<th>Criado</th>
						<th>Atualizado</th>
						<th><span class="pull-right">Ações</span></th>
					</thead>
			@foreach($categorias as $categoria)
				<tbody>
					<th>{{$categoria->categoria}}</th>
					<th>{{date_format($categoria->created_at, 'd-m-Y - H:i')}}</th>
					<th>{{date_format($categoria->updated_at, 'd-m-Y - H:i')}}</th>
					<th>
				 		<div role="group" class="pull-right">
							<a href="{{$categoria->id}}/edit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar</a>
							{!! Form::open(['method' => 'DELETE', 'url' => 'categoria/'.$categoria->id.'/destroy', 'style' => 'display: inline;']) !!}
							<button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Excluir</button>
							{!! Form::close() !!}
						</div>
					</th>
				</tbody>
			@endforeach
			</table>
			<br>
			@else
				<br>
				<div class="alert alert-info" role="alert">Nenhuma categoria foi cadastrada.</div>
			@endif	
		</div>
	</div>
</div>
@stop