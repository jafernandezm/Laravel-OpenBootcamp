
<div class="table-responsive mt-3">
    <table class="table">
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
            {{--@foreach ($rows as $r)
            @include('panel.roles._sections.row', [ 'row' => $r]) 
            <!--@includeWhen( $r['id'] ==1, 'panel.roles._sections.row', ['row'=>$r]) -->
            @endforeach
            --}}

            @each('panel.roles._sections.row', $rows, 'row')
        </tbody>
    </table>
</div>