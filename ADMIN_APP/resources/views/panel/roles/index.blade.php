
<a href=" javascript:void(0)" onclick="document.getElementById('logout').submit();" >Cerrar Sesion</a>

<form style="display: none;" id="logout" action="{{ route('logout')}}" method="POST">
    @csrf
</form>
@if( Session()->has('message') )
  <p>{{ Session()->get('message')}}</p>  
@endif
<h3>Roles de usuario</h3>
<a href="{{ route('roles.create')}}"> Crear nuevo rol</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de Creacion</th>
            <th>Fecha de actualizacion</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $r)
        <tr>
            <th>{{ $r['id'] }}</th>
            <th>{{ $r['label'] }}</th>
            <th>{{ date('d/m/Y', strtotime( $r['create_at'])) }}</th>
            <th>{{ date('d/m/Y', strtotime( $r['update_at'])) }}</th>
            <th>
                <a href="{{ route('roles.edit', ['id' => $r['id']]) }}">Editar</a>
                <form  id="logout" action="{{ route('roles.delete', ['id' =>$r['id']])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Eliminar</button>
                </form>
               
            </th>
        </tr>
        @endforeach
    </tbody>
</table>