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
            <tbody v-for="incidenciaVS in IncidenciaT">
                <tr  v-if="incidenciaVS.Estado =='Pendiente'">
                    <th scope="row">@{{funcionContadir(IncidenciaT)}}</th>
                    <td>@{{incidenciaVS.id}}</td>
                    <td>@{{incidenciaVS.Descripcion}}</td>
                    <td>@{{incidenciaVS.Estado}}</td>
                    <td id="datosC">@{{funciondedarColor(incidenciaVS.Prioridad)}}</td>
                    <td><button class="btn btn-danger" >Resolver</button></td>

                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>