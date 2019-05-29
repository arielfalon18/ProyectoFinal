<table class="table">
<thead>
    <tr>
    <th scope="col">Id_Incidencia</th>
    <th scope="col">Descripcion_Incidencia</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
    </tr>
</thead>
<tbody>
    @foreach($historial as $historia)
    <tr>
        <th scope="row">{{$historia->id}}</th>
        <td> {{$historia->incidenciaId}}</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    @endforeach
</tbody>
</table>
