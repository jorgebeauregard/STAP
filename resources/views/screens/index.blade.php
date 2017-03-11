@extends('layouts.sidebar')

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
                    <td class="center"><a href="{{ route('screens.show', [ $screen->id]) }}">{{ $screen->name }} </td>
                    <td class="center">{{ $screen->latitude }} </td>
                    <td class="center">{{ $screen->longitude }} </td>
                    <td class="center">{{ $screen->city }} </td>
                    <td class="center">{{ $screen->province }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection