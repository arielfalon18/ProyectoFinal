@extends('layouts.user')
@section('content')

<div id="appV"  class="registro">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>Tareas pendientes</p>
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Nombre Empleado</th>
                        <th scope="col">Prioridad</th>
                        </tr>
                    </thead>
                    <tbody v-for="(incidenciaVS,index)  in IncidenciaT">
                        <tr v-if="incidenciaVS.Id_Empres == {{auth('usuarioL')->user()->Id_Empresa}} && incidenciaVS.Prioridad=='Pendiente'
                            && incidenciaVS.Id_Departamento=={{auth('usuarioL')->user()->Id_Departamento}}">
                            <th scope="row">1</th>
                            <td>@{{incidenciaVS.Descripcion}}</td>
                            <td>@{{incidenciaVS.nombres_empleado.nombre}}</td>
                            <td>@{{incidenciaVS.Prioridad}}</td>
                        </tr>
                    </tbody>
                    </table>
                   
            </div>
            <div class="col-6">
                Dar una orden
            </div>
        </div>
    </div>
</div>