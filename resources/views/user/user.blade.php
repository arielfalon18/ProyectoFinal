@extends('layouts.user')
@section('content')


<div id="appV" class="usuario">
  <div id="UsuarioNombreTitol" v-for="Empleatt in empleadosNA" v-if="Empleatt.id=={{auth('usuarioL')->user()->Id_empleado}}">
    <h2>Bienvenido/a @{{Empleatt.nombre}}</h2>
  </div>
  
  <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>

  <div class="container-fluid usuario">
    <div class="row">

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTAN PENDIENTES -->
      <div class="col-lg-3 col-md-6 col-xs-12 bodyIncidencia">
        <div class="container_tickets to-do border">
          <!-- <div class="title-estados"><h5 class="text-estado">Pendiente</h5></div> -->
          <div class="main-card-incidencia"></div>
          <div class="card w-100 " v-for="IncidenciaA in IncidenciaT" v-if="IncidenciaA.Estado=='Pendiente' 
          && IncidenciaA.Id_Empleado_usuario=={{auth('usuarioL')->user()->Id_empleado}}">
            <div class="card-body" v-for="empleadosA in empleadosNA" v-if="IncidenciaA.	Id_Empleado_usuario==empleadosA.id">
              <div class="estado-color-pendiente"></div>
              <h5 class="card-title">@{{IncidenciaA.Estado}} <p class="cardFecha"> <strong>@{{IncidenciaA.FechaEntrada}} </strong></p></h5>
              <div class="card1" v-for="DepartamentosA in DepartamentosT" v-if="IncidenciaA.IdDepartamento==DepartamentosA.id">
              <div class="card1Text">
                <div>
                  <p class="informacion"><strong>Tecnico:</strong>Pendiente</p>
                  <p class="informacion"><strong>Close:</strong> Pendiente</p>
                </div>
              </div>
                <p class="informacion"><strong>Usuario:</strong> @{{empleadosA.nombre}}</p>
                <p class="informacion"><strong>Departamento:</strong> @{{DepartamentosA.Nombre}}</p>
                <p class="informacion"><strong>Prioridad:</strong> @{{IncidenciaA.Prioridad}}</p>
                <hr>
                <p class="informacion"><strong>Descripcion:</strong> @{{IncidenciaA.Descripcion}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN EN PROGRESO -->
      <div class="col-lg-3 col-md-6 col-xs-12 bodyIncidencia">
      <div class="container_tickets doing border">
      <!-- <div class="title-estados"><h5  class="text-estados">Progreso</h5></div> -->
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaB in IncidenciaT" v-if="IncidenciaB.Estado=='Progreso'
        && IncidenciaB.Id_Empleado_usuario=={{auth('usuarioL')->user()->Id_empleado}}">
          <div class="card-body" v-for="empleadosB in empleadosNA" v-if="IncidenciaB.Id_Empleado_usuario==empleadosB.id">
            <div class="estado-color-progreso"></div>
            <h5 class="card-title">@{{IncidenciaB.Estado}} <p class="cardFecha"><strong> @{{IncidenciaB.FechaEntrada}}</strong></p></h5>
            <div class="card2" v-for="DepartamentosB in DepartamentosT" v-if="IncidenciaB.IdDepartamento==DepartamentosB.id">
              <div class="card1Text">
                <div v-for="TecnicoInc in IncidenciaTecni" v-if="TecnicoInc.Id_Incidencia==IncidenciaB.id">

                  <p class="informacion"><strong>Tecnico:</strong> @{{TecnicoInc.mostrar_tecnico.nombre}}</p>
                  <p class="informacion"><strong>Close:</strong> Pendiente</p>
                </div>
              </div>
              <p class="informacion"><strong>Usuario:</strong> @{{empleadosB.nombre}}</p>
              <p class="informacion"><strong>Departamento:</strong> @{{DepartamentosB.Nombre}}</p>
              <p class="informacion"><strong>Prioridad:</strong> @{{IncidenciaB.Prioridad}} </p>
              <hr>
              <p class="informacion"><strong>Descripcion:</strong> @{{IncidenciaB.Descripcion}}</p>
            </div>
          </div>
        </div>
        </div>
      </div>

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN FINALIZADAS -->
      <div class="col-lg-3 col-md-6 col-xs-12 bodyIncidencia">
      <div class="container_tickets finish border">
      <!-- <div class="title-estados"><h5>Finalizada</h5></div> -->
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaC in IncidenciaT" v-if="IncidenciaC.Estado=='Finalizada'
        && IncidenciaC.Id_Empleado_usuario=={{auth('usuarioL')->user()->Id_empleado}}">
          <div class="card-body" v-for="empleadosC in empleadosNA" v-if="IncidenciaC.Id_Empleado_usuario==empleadosC.id">
            <div class="estado-color-finalizada"></div>
            <h5 class="card-title">@{{IncidenciaC.Estado}} <p class="cardFecha"> <strong>@{{IncidenciaC.FechaEntrada}}</strong></p></h5>
            <div class="card3" v-for="DepartamentosC in DepartamentosT" v-if="IncidenciaC.IdDepartamento==DepartamentosC.id">
              <div class="card1Text">
                <div v-for="TecnicoInc in IncidenciaTecni" v-if="TecnicoInc.Id_Incidencia==IncidenciaC.id">
                  <p class="informacion"><strong>Tecnico:</strong> @{{TecnicoInc.mostrar_tecnico.nombre}}</p>
                  <p class="informacion"><strong>Close:</strong> @{{TecnicoInc.mostrar_datos_incidencia.FechaCierre}}</p>
                </div>
              </div>
              <p class="informacion"><strong>Usuario:</strong> @{{empleadosC.nombre}} </p>
              <p class="informacion"><strong>Departamento:</strong> @{{DepartamentosC.Nombre}}</p>
              <p class="informacion"><strong>Prioridad:</strong> @{{IncidenciaC.Prioridad}} </p>
              <hr>
              <p class="informacion"><strong>Descripcion usuario:</strong> @{{IncidenciaC.Descripcion}}</p>
              <hr>
              <div v-for="mostrarC in mostrarDescTec" v-if="mostrarC.Id_incidencia==IncidenciaC.id">
                <p class="informacion"><strong>Descripcion tecnico:</strong> @{{mostrarC.Descripcion}} </p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

      <!-- MOSTRAMOS LAS INCIDENCIAS QUE ESTEN CANCELADAS -->
      <div class="col-lg-3 col-md-6 col-xs-12 bodyIncidencia">
      <div class="container_tickets cancel border">

        <!-- <div class="title-estados"><h5>Cancelada</h5></div> -->
        <div class="main-card-incidencia"></div>
        <div class="card w-100" v-for="IncidenciaD in IncidenciaT" v-if="IncidenciaD.Estado=='Cancelada'
        && IncidenciaD.Id_Empleado_usuario=={{auth('usuarioL')->user()->Id_empleado}}">
          <div class="card-body" v-for="empleadosD in empleadosNA" v-if="IncidenciaD.Id_Empleado_usuario==empleadosD.id">
            <div class="estado-color-cancelada"></div>
            <h5 class="card-title"> @{{IncidenciaD.Estado}} <p class="cardFecha"> <strong>@{{IncidenciaD.FechaEntrada}}</strong></p></h5>
            <div class="card4" v-for="DepartamentosD in DepartamentosT" v-if="IncidenciaD.IdDepartamento==DepartamentosD.id">
            <div class="card1Text">
                <div v-for="TecnicoInc in IncidenciaTecni" v-if="TecnicoInc.Id_Incidencia==IncidenciaD.id">
                  <p class="informacion"><strong>Tecnico:</strong> @{{TecnicoInc.mostrar_tecnico.nombre}}</p>
                      
                  <p class="informacion"><strong>Close:</strong> @{{TecnicoInc.mostrar_datos_incidencia.FechaCierre}}</p>
                </div>
              </div>
              <p class="informacion"><strong>Usuario:</strong> @{{empleadosD.nombre}} </p>
              <p class="informacion"><strong>Departamento:</strong> @{{DepartamentosD.Nombre}}</p>
              <p class="informacion"><strong>Prioridad:</strong> @{{IncidenciaD.Prioridad}} </p>
              <hr> 
              <p class="informacion"><strong>Descripcion:</strong> @{{IncidenciaD.Descripcion}}</p>
              <hr>
              <div v-for="mostrarD in mostrarDescTec" v-if="mostrarD.Id_incidencia==IncidenciaD.id">
                <p class="informacion"><strong>Descripcion tecnico:</strong> @{{mostrarD.Descripcion}} </p>
              </div>         
            </div>
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
