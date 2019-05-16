@extends('layouts.user')
@section('content')
<div id="appV" class="usuario">
  <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
  <div class="container-fluid usuario">
    <div class="row">

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTAN PENDIENTES -->
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
      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN EN PROGRESO -->
      <div class="col-lg-3 col-md-6 col-xs-12 doing border">
        <h5 class="title-estados">Progreso</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaB in IncidenciaT" v-if="IncidenciaB.Estado=='Progreso'">
          <div class="card-body">
            <div class="estado-color-progreso"></div>
            <h5 class="card-title">@{{IncidenciaB.Estado}}</h5>
            <div class="card2">
              <table class="card1Text">
                <tbody>
                  <td>Usuario : @{{IncidenciaB.Id_Empleado_usuario}} </td>
                  <th class="cardFecha"> @{{IncidenciaB.FechaEntrada}}</th>
                </tbody>
              </table>
              <p>Tecnico </p>
              <p>Estado: @{{IncidenciaB.Estado}} </p>
              <hr>
              <p>Descripcion: @{{IncidenciaB.Descripcion}}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN FINALIZADAS -->
      <div class="col-lg-3 col-md-6 col-xs-12 finish border">
        <h5 class="title-estados">Finalizada</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaC in IncidenciaT" v-if="IncidenciaC.Estado=='Finalizada'">
          <div class="card-body">
            <div class="estado-color-finalizada"></div>
            <h5 class="card-title">@{{IncidenciaC.Estado}}</h5>
            <div class="card3">
              <table class="card1Text">
                <tbody>
                  <td>Usuario : @{{IncidenciaC.Id_Empleado_usuario}} </td>
                  <th class="cardFecha"> @{{IncidenciaC.FechaEntrada}}</th>
                </tbody>
              </table>
              <p>Tecnico </p>
              <p>Estado: @{{IncidenciaC.Estado}} </p>
              <hr>
              <p>Descripcion: @{{IncidenciaC.Descripcion}}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN CANCELADAS -->
      <div class="col-lg-3 col-md-6 col-xs-12 cancel border">
        <h5 class="title-estados">Cancelada</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaD in IncidenciaT" v-if="IncidenciaD.Estado=='Finalizada'">
          <div class="card-body">
            <div class="estado-color-cancelada"></div>
            <h5 class="card-title"> @{{IncidenciaD.Estado}}</h5>
            <div class="card4">
              <table class="card1Text">
                <tbody>
                  <td>Usuario : @{{IncidenciaD.Id_Empleado_usuario}} </td>
                  <th class="cardFecha"> @{{IncidenciaD.FechaEntrada}}</th>
                </tbody>
              </table>
              <p>Tecnico </p>
              <p>Estado: @{{IncidenciaD.Estado}} </p>
              <hr>
              <p>Descripcion: @{{IncidenciaD.Descripcion}}</p>
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