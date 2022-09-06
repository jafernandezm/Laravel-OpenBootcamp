
<a href=" javascript:void(0)" onclick="document.getElementById('logout').submit();" >Cerrar Sesion</a>

<form style="display: none;" id="logout" action="{{ route('logout')}}" method="POST">
    @csrf
</form>

<h3> Roles de usuario / CREAR NUEVO ROl</h3>
<a href="{{ route('roles.index')}}">Volver</a>
@if($id == null) 
<h2>Crear nuevo rol</h2>
@else <h2>modificar rol</h2>
@endif
<form action="{{ route('roles.save', ['id' => $id]) }}" method="POST">
    @if ($id != null)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $id }}"/>
    @endif
    @csrf 
    <label >Nombre</label>
    <!-- Esto es para comprobar el usuario que eres -->
    <input type="text" name="label" value="{{ $record != null ? $record['label'] : ''}}"/>
    <button>Guardar</button>
</form>

