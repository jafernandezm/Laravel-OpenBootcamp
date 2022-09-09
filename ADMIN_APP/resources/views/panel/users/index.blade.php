@extends('panel.generals.base')
@section('title','Usuarios')
@section('main')
    <div class="container">
        @if( Session()->has('message') )
        <div class="alert alert-success">
        {{ Session()->get('message')}}
        </div>
        @endif
        <h3 >Usuarios</h3>
        <a class="btn btn-primary" href="{{ route('users.create')}}"> 
           <i  class="fas fa-add" ></i>Crear nuevo Usuario
        </a>
        @includeif('panel.users._sections.table',['users' => $users])
    </div>
@endsection
