@extends('layouts.sidebar')

@section('description', "Mis anuncios")

@section('content')
    <img src="{{Storage::url($ad->path)}}" width=100%>
@endsection