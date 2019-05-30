<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <table class="table">
    <thead>
        <tr>
        <th scope="col">id_incidencia</th>
        <th scope="col">Descripcion</th>
        <th scope="col">NombreUsuario</th>
        <th scope="col">NombreTecnico</th>
        <th scope="col">DescripcionTecnico</th>
        <th scope="col">id_Departamento</th>
        </tr>
    </thead>
    <tbody>
        @foreach($historialE as  $variable)
        <tr>
            <th scope="row">{{$variable->id}}</th>
            <td>{{$variable->descripcionIncidencia}}</td>
            <td>{{$variable->nombre_usuario}}</td>
            <td>{{$variable->nombreTecnico}}</td>
            <td>{{$variable->descripcionTecnico}}</td>
            <td>{{$variable->IdDepartamento}}</td>
        
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>