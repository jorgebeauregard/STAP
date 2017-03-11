@extends('layouts.sidebar')

@section('description','Mis pantallas')
@section('content')
<div>
    <section>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($screens as $screen)
                <tr>
                   <?php $array = $screen->ads ?>
                    @foreach($array as $element)
                        @if($element->user_id == $id)
                            <td class="center"><a href="{{ route('screens.show', [ $screen->id]) }}">{{ $screen->name }} </td>
                            <td class="center">{{ $screen->latitude }} </td>
                            <td class="center">{{ $screen->longitude }} </td>
                            <td class="center">{{ $screen->city }} </td>
                            <td class="center">{{ $screen->province }} </td>
                        @endif
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection