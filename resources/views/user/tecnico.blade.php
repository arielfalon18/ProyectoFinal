@extends('layouts.user')
@section('content')

<div id="appV"  class="registro">
    <div class="container-fluid">
        <div>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Prioridad</th>
                <th scope="operaciones">Resolver</th>
                </tr>
            </thead>
            <tbody v-for="(incidenciaVS,index)  in IncidenciaT">
                <tr  v-if="incidenciaVS.Estado =='Pendiente'">
                    <th scope="row">@{{funcionContadir(IncidenciaT)}}</th>
                    <td>@{{incidenciaVS.id}}</td>
                    <td>@{{incidenciaVS.Descripcion}}</td>
                    <td>@{{incidenciaVS.Estado}}</td>
                    <td v-if="incidenciaVS.Prioridad=='Alta'" class="TAlta border text-center">@{{incidenciaVS.Prioridad}}</td>
                    <td v-else-if="incidenciaVS.Prioridad=='Baja'" class="TBaja border text-center">@{{incidenciaVS.Prioridad}}</td>
                    <td v-else-if="incidenciaVS.Prioridad=='Media'" class="TMedio border text-center">@{{incidenciaVS.Prioridad}}</td>
                    <td><button class="btn btn-danger" >Resolver</button></td>

                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>