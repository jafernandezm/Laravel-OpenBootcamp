@extends('panel.generals.base')
@section('title','tipos de Roles')
@section('main')
<div class="container">
  @if( Session()->has('message') )
  <div class="alert alert-success">
    {{ Session()->get('message')}}
  </div>
  @endif
  <h3>Roles de usuario</h3>
  <a class="btn btn-primary"  href="{{ route('roles.create')}}">
    <i class="fas fa-add"> Crear nuevo rol</i>
  </a>
  @includeIf('panel.roles._sections.table',['rows' => $roles])
</div>
@endsection


