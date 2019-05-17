@extends('layouts.user')
@section('content')
<div id="appV"  class="registro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <p>Tareas pendientes</p>
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Empleado</th>
                        <th scope="col">Prioridad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">AsignarT</th>
                        </tr>
                    </thead>
                    <tbody v-for="(incidenciaVS,index)  in IncidenciaT">
                        <tr v-if="incidenciaVS.Id_Empresa == {{auth('usuarioL')->user()->Id_Empresa}} && incidenciaVS.Estado=='Pendiente'
                            && incidenciaVS.IdDepartamento=={{auth('usuarioL')->user()->Id_Departamento}}">
                            <th scope="row">1</th>
                            <td>@{{incidenciaVS.nombres_empleado.nombre}}</td>
                            <td v-if="incidenciaVS.Prioridad=='Alta'" class="TAlta border text-center">@{{incidenciaVS.Prioridad}}</td>
                            <td v-else-if="incidenciaVS.Prioridad=='Baja'" class="TBaja border text-center">@{{incidenciaVS.Prioridad}}</td>
                            <td v-else-if="incidenciaVS.Prioridad=='Media'" class="TMedio border text-center">@{{incidenciaVS.Prioridad}}</td>
                            <td><button class="btn btn-info" v-on:click.prevent="MostrarDI(incidenciaVS)">Mostrar</button></td>
                            <td><button class="btn btn-success" v-on:click.prevent="datosIncidenccia(incidenciaVS)">Asignar</button></td>
                        </tr>
                    </tbody>
                    </table>
                   
            </div>
            <div class="col-6">
           <p> areas pendientes</p>
           <!-- <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Empleado</th>
                        <th scope="col">Prioridad</th>
                        <th scope="col">Ver</th>
                        <th scope="col">Reasignar</th>
                        </tr>
                    </thead>
                    <tbody v-for="(incidenciaVS,index)  in IncidenciaT">
                        <tr v-if="incidenciaVS.Id_Empresa == {{auth('usuarioL')->user()->Id_Empresa}} && incidenciaVS.Estado=='Pendiente'
                            && incidenciaVS.IdDepartamento=={{auth('usuarioL')->user()->Id_Departamento}}">
                            <th scope="row">1</th>
                            <td>@{{incidenciaVS.nombres_empleado.nombre}}</td>
                            <td v-if="incidenciaVS.Prioridad=='Alta'" class="TAlta border text-center">@{{incidenciaVS.Prioridad}}</td>
                            <td v-else-if="incidenciaVS.Prioridad=='Baja'" class="TBaja border text-center">@{{incidenciaVS.Prioridad}}</td>
                            <td v-else-if="incidenciaVS.Prioridad=='Media'" class="TMedio border text-center">@{{incidenciaVS.Prioridad}}</td>
                            <td><button class="btn btn-info" v-on:click.prevent="MostrarDI(incidenciaVS)">Mostrar</button></td>
                            <td><button class="btn btn-success" v-on:click.prevent="datosIncidenccia(incidenciaVS)">Asignar</button></td>
                        </tr>
                    </tbody>
                    </table> -->
            </div>
        </div>
    </div>
    @include('modal.modalDI')
    @include('modal.modalAsignar')
</div>