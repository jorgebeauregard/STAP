@extends('layouts.sidebar')

@if (session('message'))
    <div class="alert alert-success">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('error') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('description', 'Mis anuncios')

@section('content')
<div class="panel-body">
    {!! Form::model(new App\Ad, ['route' =>'ads.store', 'files' => 'true' ]) !!}
    @include('ads.form', ['submit_text' => 'Agregar'])
</div>

@endsection