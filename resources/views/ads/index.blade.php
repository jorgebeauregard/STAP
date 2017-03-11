@extends('layouts.sidebar')

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
                      <td>{{ App\Category::find($ad->category_id)->name }}</td>
                      <td>{{ $ad->quantity }}</td>
                      <td>{{ $ad->limit }}</td>                      
                      <td>{{ $ad->active ? 'Activo' : 'No activo' }}</td>                     
                    @endif
            </tr>
            @endforeach
		</tbody>
	</table>
</section>
@endsection