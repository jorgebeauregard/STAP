@extends('layouts.sidebar')

@if (session('deleted'))
<div class="alert alert-warning">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('deleted') }}
</div>
@endif
@if (session('failDeleted'))
<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('failDeleted') }}
</div>
@endif
@if (session('message'))
<div class = "alert alert-success" class = "close">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('message') }}
</div>
@endif

@section('description', "Verificar Codigos")

@section('content')
<section>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Activo</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($codes as $code)
			<tr>            
				@if($code->ad->user_id == $id)
				<td>{{ $code->name }}</td>
				<td>{{ $code->active ? 'Activo' : 'No activo' }}</td>
				@if($code->active)
				<td class="center">
					<div class="col-xs-1">
						{!! Form::open( [ 'method' => 'GET', 'route'=>['codes.edit', $code->id]]) !!}
						<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
						{!! Form::close() !!}
					</div>
				</td>
				@else
				<td class="center">
				</td>
				@endif
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</section>
@endsection