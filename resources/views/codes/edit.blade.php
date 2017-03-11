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

@section('description', 'Canjear codigo')

@section('content')
<div class="panel-body">
    {!! Form::model($code, ['method' => 'PUT', 'route' =>['codes.update', $code->id], 'files' => 'true']) !!}
    <div class="form-panel">
        <h3>{{$code->name}}</h3>
        <div class="form-group">
            {!! Form::submit('Verificar', ['class'=>'btn primary btn-success']); !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection