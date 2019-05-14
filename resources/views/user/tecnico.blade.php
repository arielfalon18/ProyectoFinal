@extends('layouts.user')
@section('content')

<div id="appV"  class="registro">
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
                <th scope="operaciones">Accion</th>
                </tr>
            </thead>
            <tbody v-for="(incidenciaVS,index)  in IncidenciaT">
                <tr  v-if="incidenciaVS.Prioridad =='Pendiente' && incidenciaVS.Id_Empres=={{auth('usuarioL')->user()->Id_Empresa}} 
                  && incidenciaVS.Id_Departamento == {{auth('usuarioL')->user()->Id_Departamento}}">
                    <th scope="row">@{{funcionContadir(IncidenciaT)}}</th>
                    <td>@{{incidenciaVS.id}}</td>
                    <td>@{{incidenciaVS.Descripcion}}</td>
                    <td v-if="incidenciaVS.Estado=='Alta'" class="TAlta border text-center">@{{incidenciaVS.Estado}}</td>
                    <td v-else-if="incidenciaVS.Estado=='Baja'" class="TBaja border text-center">@{{incidenciaVS.Estado}}</td>
                    <td v-else-if="incidenciaVS.Estado=='Medio'" class="TMedio border text-center">@{{incidenciaVS.Estado}}</td>
                    <td>@{{incidenciaVS.Prioridad}}</td>
                    <td><button class="btn btn-danger " id="exampleModal">Resolver</button></td>

                </tr>
            </tbody>
            </table>
        </div>
    </div>


<!-- Modal para Accion de Tecnico -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div v-for="incidenciaVS in IncidenciaT">
          @{{incidenciaVS.id}}
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>