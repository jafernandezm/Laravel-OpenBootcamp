<tr>
    <th>{{ $type['id'] }}</th>
    <th>{{ $type['label'] }}</th>
    <th>{{ date('d/m/Y', strtotime( $type['create_at'])) }}</th>
    <th>{{ date('d/m/Y', strtotime( $type['update_at'])) }}</th>
    <th>
        <a  class="btn btn-success" href="{{ route('types.edit', ['id' => $type['id']]) }}">Editar</a>
        <form onsubmit="return confirm('Seguro que deseas eliminar este registro?')"  id="logout" action="{{ route('types.delete', ['id' =>$type['id']])}}" method="POST">
            @csrf
            @method('DELETE')
            <br>
            <button class="btn btn-danger">Eliminar</button>
        </form>
    
    </th>
</tr>
</div>