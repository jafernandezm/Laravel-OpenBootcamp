@extends('panel.generals.base')
@if($id ==null)
    @section('title','Crear un Usuario')
@else 
    @section('title','Modificar Usuario')
@endif
@section('header')
<nav>
    <a class="btn btn-light" href="{{ route('users.index')}}">
        <i class="fas fa-chevron-left"></i> Volver
    </a>
</nav>
@endsection
@section('main')
    <div class="container">
        @section('main')
        <h3 class="title text-center"> Usuario
        @if($id == null) 
            Crear nuevo Usuario
        @else 
            Modificar Usuario
        @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('users.save', ['id' => $id]) }}" method="POST">
                    @if ($id != null)
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $id }}"/>
                    @endif
                    @csrf 
                    
                    <!-- Esto es para comprobar el usuario que eres -->
                    <div class="form-group">
                        <label >Nombre</label>
                        <input class="form-control" type="text" name="name" value="{{ $record != null ? $record['name'] : ''}}"/>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $record != null ? $record['email'] : ''}}"/>
                    </div>
                    <button class="btn btn-success">Guardar</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection




