@extends('panel.generals.base')
@section('title','tipos de Usuario')
@section('main')
    <div class="container">
        @if( Session()->has('message') )
        <div class="alert alert-success">
        {{ Session()->get('message')}}
        </div>
        @endif
        <h3 >tipos de usuario</h3>
        <a class="btn btn-primary" href="{{ route('types.create')}}"> 
           <i  class="fas fa-add" ></i>Crear nuevo tipo
        </a>
        @includeif('panel.types._sections.table',['types' => $types])
    </div>
@endsection




