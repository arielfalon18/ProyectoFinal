@extends('layouts.user')
@section('content')
<div id="appV"class="usuario">
<button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
<div class="container-fluid usuario">
      <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12 to-do border">
            <h5 class="title-estados">Pendiente</h5>
          <div class="main-card-incidencia"></div>
              <div class="card w-100" v-for="IncidenciaA in IncidenciaT" v-if="IncidenciaA.Estado=='Pendiente'">
                  <div class="card-body">
                  <div class="estado-color-pendiente"></div>
                      <h5 class="card-title">@{{IncidenciaA.Estado}}</h5>
                  <div class="card1">
                  <table class="card1Text">
                      <tbody>
                          <td>Usuario : @{{IncidenciaA.Id_Empleado_usuario}} </td>
                          <th class="cardFecha"> @{{IncidenciaA.FechaEntrada}}</th>
                      </tbody>
                  </table>
                      <p>Tecnico : Pendiente de Asignar</p>
                      <p>Estado: @{{IncidenciaA.Estado}}</p>                            
                      <hr>
                      <p>Descripcion: @{{IncidenciaA.Descripcion}}</p>
                  </div>  
              </div>
              
          </div>
          
              
      </div>
@include('modal.modalUser')
</div>
@stop





<!-- Modal para Ver mas de incidencias -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informacion General</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>

    </div>
  </div>
</div>