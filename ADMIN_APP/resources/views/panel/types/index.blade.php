
<a href=" javascript:void(0)" onclick="document.getElementById('logout').submit();" >Cerrar Sesion</a>

<form style="display: none;" id="logout" action="{{ route('logout')}}" method="POST">
    @csrf
</form>

<h3>tipos de usuario</h3>
<a href="{{ route('types.create')}}"> Crear nuevo tipo</a>

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
        @foreach ($types as $t)
        <tr>
            <th>{{ $t['id'] }}</th>
            <th>{{ $t['label'] }}</th>
            <th>{{ date('d/m/Y', strtotime( $t['create_at'])) }}</th>
            <th>{{ date('d/m/Y', strtotime( $t['update_at'])) }}</th>
            <th>
                <a href="{{ route('types.edit', ['id' => $t['id']]) }}">Editar</a>
                <form  id="logout" action="{{ route('types.delete', ['id' =>$t['id']])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Eliminar</button>
                </form>
               
            </th>
        </tr>
        @endforeach
    </tbody>
</table>