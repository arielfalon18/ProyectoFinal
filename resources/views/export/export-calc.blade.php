<table class="table">
<thead>
    <tr>
    <th scope="col">Id_Incidencia</th>
    <th scope="col">Descripcion_Incidencia</th>
    <th scope="col">Nombre_Usuario</th>
    <th scope="col">Nombre_Tecnico</th>
    <th scope="col">Descripcion_Tecnico</th>
    <th scope="col">Prioridad_Incidencia</th>
    <th scope="col">Id_Departamento</th>

    </tr>
</thead>
<tbody>
    @foreach($mostrarHistorial as $historia)
    <tr>
        <th scope="row">{{$historia->id}}</th>
        <td> {{$historia->descripcionIncidencia}}</td>
        <th>{{$historia->nombre_usuario}}</th>
        <td> {{$historia->nombreTecnico}}</td>
        <th>{{$historia->descripcionTecnico}}</th>
        <td> {{$historia->Prioridad}}</td>
        <td> {{$historia->IdDepartamento}}</td>
    </tr>
    @endforeach
</tbody>
</table>
