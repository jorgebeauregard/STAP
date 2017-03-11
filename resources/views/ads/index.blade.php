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

@section('description', "Mis anuncios")

@section('content')
<section>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Categoria</th>
				<th>Cantidad</th>
				<th>Limite</th>
				<th>Activo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($ads as $ad)
			<tr>            
				@if($ad->user_id == $id)
				<td><a href="{{ route('ads.show', [ $ad->id]) }}">{{ App\Category::find($ad->category_id)->name }}</td>
				<td>{{ $ad->quantity }}</td>
				<td>{{ $ad->limit }}</td>                      
				<td>{{ $ad->active ? 'Activo' : 'No activo' }}</td>                     
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
	<div align="left">
		{!! Form::open( [ 'method' => 'GET', 'route' =>['ads.create']]) !!}
		{!! Form::submit('Agregar un anuncio nuevo', ['class' => 'btn btn-success']) !!}
		{!! Form::close() !!}
	</div>
</section>
@endsection