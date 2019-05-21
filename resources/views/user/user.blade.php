@extends('layouts.user')
@section('content')
<button>asd</button>
<div id="appV" class="usuario">
  <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
<button type="button" class="btn btn-primary" id="incidenciaa" data-toggle="modal" data-target=".bd-example-modal-sm">Editar User</button>

  <div class="container-fluid usuario">
    <div class="row">

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTAN PENDIENTES -->
      <div class="col-lg-3 col-md-6 col-xs-12 to-do border">
        <h5 class="title-estados">Pendiente</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaA in IncidenciaT" v-if="IncidenciaA.Estado=='Pendiente' && IncidenciaA.id_Empresa=={{auth('usuarioL')->user()->Id_Empresa}}">
          <div class="card-body" v-for="empleadosA in empleadosNA" v-if="IncidenciaA.	Id_Empleado_usuario==empleadosA.id">
            <div class="estado-color-pendiente"></div>
            <h5 class="card-title">@{{IncidenciaA.Estado}} <p class="cardFecha"> <strong>@{{IncidenciaA.FechaEntrada}} </strong></p></h5>
            <div class="card1" v-for="DepartamentosA in DepartamentosT" v-if="IncidenciaA.IdDepartamento==DepartamentosA.id">
              <table class="card1Text" >
                <tbody>
                  <td>Usuario: @{{empleadosA.nombre}}</td>
                </tbody>
              </table>
              <p class="informacion">Tecnico: Pendiente de Asignar</p>
              <p class="informacion">Departamento: @{{DepartamentosA.Nombre}}</p>
              <p class="informacion">Prioridad: @{{IncidenciaA.Prioridad}}</p>
              <hr>
              <div class="texto-dentro">
                <p class="informacion">Descripcion: @{{IncidenciaA.Descripcion}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN EN PROGRESO -->
      <div class="col-lg-3 col-md-6 col-xs-12 doing border">
        <h5 class="title-estados">Progreso</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaB in IncidenciaT" v-if="IncidenciaB.Estado=='Progreso'">
          <div class="card-body" v-for="empleadosB in empleadosNA" v-if="IncidenciaB.Id_Empleado_usuario==empleadosB.id">
            <div class="estado-color-progreso"></div>
            <h5 class="card-title">@{{IncidenciaB.Estado}} <p class="cardFecha"><strong> @{{IncidenciaB.FechaEntrada}}</strong></p></h5>
            <div class="card2" v-for="DepartamentosB in DepartamentosT" v-if="IncidenciaB.IdDepartamento==DepartamentosB.id">
              <table class="card1Text">
                <tbody>
                  <td>Usuario: @{{empleadosB.nombre}}</td>
                </tbody>
              </table>
              <p class="informacion">Tecnico </p>
              <p class="informacion">Departamento: @{{DepartamentosB.Nombre}}</p>
              <p class="informacion">Prioridad: @{{IncidenciaB.Prioridad}} </p>
              <hr>
              <p class="informacion">Descripcion: @{{IncidenciaB.Descripcion}}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN FINALIZADAS -->
      <div class="col-lg-3 col-md-6 col-xs-12 finish border">
        <h5 class="title-estados">Finalizada</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaC in IncidenciaT" v-if="IncidenciaC.Estado=='Finalizada'">
          <div class="card-body" v-for="empleadosC in empleadosNA" v-if="IncidenciaC.Id_Empleado_usuario==empleadosC.id">
            <div class="estado-color-finalizada"></div>
            <h5 class="card-title">@{{IncidenciaC.Estado}} <p class="cardFecha"> <strong>@{{IncidenciaC.FechaEntrada}}</strong></p></h5>
            <div class="card3" v-for="DepartamentosC in DepartamentosT" v-if="IncidenciaC.IdDepartamento==DepartamentosC.id">
              <table class="card1Text">
                <tbody>
                  <td>Usuario: @{{empleadosC.nombre}} </td>
                  
                </tbody>
              </table>
              <p class="informacion">Tecnico </p>
              <p class="informacion">Departamento: @{{DepartamentosC.Nombre}}</p>
              <p class="informacion">Prioridad: @{{IncidenciaC.Prioridad}} </p>
              <hr>
              <p class="informacion">Descripcion: @{{IncidenciaC.Descripcion}}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN CANCELADAS -->
      <div class="col-lg-3 col-md-6 col-xs-12 cancel border">
        <h5 class="title-estados">Cancelada</h5>
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaD in IncidenciaT" v-if="IncidenciaD.Estado=='Cancelada'">
          <div class="card-body" v-for="empleadosD in empleadosNA" v-if="IncidenciaD.Id_Empleado_usuario==empleadosD.id">
            <div class="estado-color-cancelada"></div>
            <h5 class="card-title"> @{{IncidenciaD.Estado}} <p class="cardFecha"> <strong>@{{IncidenciaD.FechaEntrada}}</strong></p></h5>
            <div class="card4" v-for="DepartamentosD in DepartamentosT" v-if="IncidenciaD.IdDepartamento==DepartamentosD.id">
              <table class="card1Text">
                <tbody>
                  <td>Usuario : @{{empleadosD.nombre}} </td>
                </tbody>
              </table>
              <p class="informacion">Tecnico </p>
              <p class="informacion">Departamento: @{{DepartamentosD.Nombre}}</p>
              <p class="informacion">Prioridad: @{{IncidenciaD.Prioridad}} </p>
              <hr>
              <p class="informacion">Descripcion: @{{IncidenciaD.Descripcion}}</p>
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

<!-- Modal para modificar los datos del user al hacer login -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" v-for="IncidenciaB in IncidenciaT">

@{{IncidenciaA.Estado}}
    </div>
  </div>
</div>