<tr>
    <th>{{ $row['id'] }}</th>
    <th>{{ $row['label'] }}</th>
    <th>{{ date('d/m/Y', strtotime( $row['create_at'])) }}</th>
    <th>{{ date('d/m/Y', strtotime( $row['update_at'])) }}</th>
    <th>
        <a class="btn btn-success" href="{{ route('roles.edit', ['id' => $row['id']]) }}">Editar</a>
        <form onsubmit="return confirm('Seguro que deseas eliminar este registro?')"  id="logout" action="{{ route('roles.delete', ['id' =>$row['id']])}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger   " >Eliminar</button>
        </form>
       
    </th>
</tr>