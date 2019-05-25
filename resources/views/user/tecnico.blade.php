@extends('layouts.user')
@section('content')

<div id="appV"  class="tecnico">
    <div class="container-fluid">
        <div>
        <h2>Bienvenido Tecnico</h2>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Ver detalles</th>
                <th scope="operaciones">Resolver</th>
                </tr>
            </thead>
            <tbody v-for="(incidenciaVS,index)  in IncidenciaTecni">
                <tr v-if="incidenciaVS.id_Tecnico=={{auth('usuarioL')->user()->Id_empleado}} && incidenciaVS.mostrar_datos_incidencia.Estado =='Progreso' && incidenciaVS.mostrar_datos_incidencia.Id_Empresa=={{auth('usuarioL')->user()->Id_Empresa}} 
                  && incidenciaVS.Id_Departamento == {{auth('usuarioL')->user()->Id_Departamento}}">
                  <th scope="row">@{{funcionContadir(IncidenciaT)}}</th>
                    <td>@{{incidenciaVS.mostrar_datos_incidencia.id}}</td>
                    <td id="ocultar-info">@{{incidenciaVS.mostrar_datos_incidencia.Descripcion}}</td>
                    <td>@{{incidenciaVS.mostrar_datos_incidencia.Estado}}</td>
                    <td v-if="incidenciaVS.mostrar_datos_incidencia.Prioridad=='Alta'" class="TAlta border text-center">@{{incidenciaVS.mostrar_datos_incidencia.Prioridad}}</td>
                    <td v-else-if="incidenciaVS.mostrar_datos_incidencia.Prioridad=='Baja'" class="TBaja border text-center">@{{incidenciaVS.mostrar_datos_incidencia.Prioridad}}</td>
                    <td v-else-if="incidenciaVS.mostrar_datos_incidencia.Prioridad=='Media'" class="TMedio border text-center">@{{incidenciaVS.mostrar_datos_incidencia.Prioridad}}</td>
                    <td><button class="btn btn-info " v-on:click.prevent="MostrarDetallesTecnico(incidenciaVS)">Ver Detalles</button></td>
                    <td><button class="btn btn-danger " id="exampleModal">Resolver</button></td>
                </tr>
            </tbody>
            </table>
        </div>
      <!-- Llamamos al modelo que queremos ablirlo -->
      @include('modal.modalTecnicoD')
    </div>
