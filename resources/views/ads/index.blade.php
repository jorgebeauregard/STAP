@extends('layouts.sidebar')

@section('description', "Mis anuncios")

@section('content')
<section>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Cliente</th>
				<th>Categoria</th>
				<th>Cantidad</th>
				<th>Limite</th>
				<th>Activo</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($ads as $ads)
			<tr>

			</tr>
			@endforeach
		</tbody>
	</table>
</section>
@endsection