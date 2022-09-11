<tr>
    <th>{{ $user['id'] }}</th>
    <th>{{ $user['name'] }}</th>
    <th>{{ $user['email'] }}</th>
    <th>{{ date('d/m/Y', strtotime( $user['created_at'])) }}</th>
    <th>{{ date('d/m/Y', strtotime( $user['updated_at'])) }}</th>
    <th>
        <a  class="btn btn-success" href="{{ route('users.edit', ['id' => $user['id']]) }}">Editar</a>
        <form onsubmit="return confirm('Seguro que deseas eliminar este registro?')"  id="logout" action="{{ route('users.delete', ['id' =>$user['id']])}}" method="POST">
            @csrf
            @method('DELETE')
            <br>
            <button class="btn btn-danger">Eliminar</button>
        </form>
    
    </th>
</tr>
</div>