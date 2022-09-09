<div class="table-responsive mt-3">
    <table class="table" >
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
            @each('panel.types._sections.row', $types, 'type')
        </tbody>
    </table>
</div>