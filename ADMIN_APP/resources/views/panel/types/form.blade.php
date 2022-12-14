@extends('panel.generals.base')
@if($id ==null)
    @section('title','Crear un tipo')
@else 
    @section('title','Modificar tipo')
@endif
@section('header')

<nav>
    <a class="btn btn-light" href="{{ route('types.index')}}">
        <i class="fas fa-chevron-left"></i> Volver
    </a>
</nav>

@endsection
@section('main')
    <div class="container">
        @section('main')
        <h3 class="title text-center"> Tipo de usuario
        @if($id == null) 
            Crear nuevo Tipo
        @else 
            Modificar Tipo
        @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('types.save', ['id' => $id]) }}" method="POST">
                    @if ($id != null)
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $id }}"/>
                    @endif
                    @csrf 
                    <label >Nombre</label>
                    <!-- Esto es para comprobar el usuario que eres -->
                    <div class="form-group">
                        <input class="form-control" type="text" name="label" value="{{ $record != null ? $record['label'] : ''}}"/>
                    </div>
                    <button class="btn btn-success">Guardar</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection




