@extends('layouts.user')
@section('content')
<div class="usuario">
<button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>

    <div class="container-fluid usuario">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12 to-do border"><h5 class="title-estados">Pendiente</h5>
                @foreach( $incidencia as $incidencia )
                <div class="main-card-incidencia"></div>
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">{{$incidencia->Estado}}</h5>
                        <div class="card1">
                        <table class="card1Text">
                            <tbody>
                                <td>Usuario : {{$incidencia->Id_Empleado_usuario}} </td>
                                <th class="cardFecha"> {{$incidencia->FechaEntrada}}</th>
                            </tbody>
                        </table>
                            <p>Tecnico : Pendiente de Asignar</p>
                            <p>Estado: {{$incidencia->Estado}} </p>                            
                            <hr>
                            <p>Descripcion: {{$incidencia->Descripcion}}</p>
                        </div>  
                    </div>
                </div>
                @endforeach          
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 doing border"><h5 class="title-estados">Progreso</h5>
                    @foreach ( $progreso as $progreso)
                    <div class="main-card-incidencia"></div>
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$progreso->Estado}}</h5>
                            <div class="card2">
                            <table class="card1Text">
                                <tbody>
                                    <td>Usuario : {{$progreso->Id_Empleado_usuario}} </td>
                                    <th class="cardFecha"> {{$progreso->FechaEntrada}}</th>
                                </tbody>
                            </table>
                            <p>Tecnico </p>
                                
                                <p>Estado: {{$progreso->Estado}} </p>
                                <hr>
                                <p>Descripcion: {{$progreso->Descripcion}}</p>
                            </div>
                        </div> 
                    </div>  
                @endforeach
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 finish border"><h5  class="title-estados">Finalizada</h5>
                @foreach ( $finalizada as $finalizada)
                <div class="main-card-incidencia"></div>
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">{{$finalizada->Estado}}</h5>
                    <div class="card3">
                    <table class="card1Text">
                        <tbody>
                            <td>Usuario : {{$finalizada->Id_Empleado_usuario}} </td>
                            <th class="cardFecha"> {{$finalizada->FechaEntrada}}</th>
                        </tbody>
                    </table>
                    <p>Tecnico </p>    
                        <p>Estado: {{$finalizada->Estado}} </p>
                        <hr>
                        <p>Descripcion: {{$finalizada->Descripcion}}</p>

                    </div>                   
                    </div>
                </div>
                @endforeach
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 cancel border"><h5  class="title-estados">Cancelada</h5>
                    @foreach ( $cancelada as $cancelada)
                    <div class="main-card-incidencia"></div>
                    <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">{{$cancelada->Estado}}</h5>
                    <div class="card4">
                    <table class="card1Text">
                        <tbody>
                            <td>Usuario : {{$cancelada->Id_Empleado_usuario}} </td>
                            <th class="cardFecha"> {{$cancelada->FechaEntrada}}</th>
                        </tbody>
                    </table>
                    <p>Tecnico </p>     
                        <p>Estado: {{$cancelada->Estado}} </p>
                        
                        <hr>
                        <p>Descripcion: {{$cancelada->Descripcion}}</p>
                    </div> 
                    </div>
                </div>
                    @endforeach
                </div>
                
            </div>   
    </div>
</div>
@stop



<!-- MODAL INCIDENCIA -->
<div class="modal fade" id="crearincidencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar incidencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un usuario a la base de datos  -->
        <form method="POST" action="{{ url('/incidencia/newIncidencia') }}">
        {{ csrf_field() }}
        <div class="form-row" >
            <div class="form-group col-md-6">
                <label>Fecha incidencia</label>
                <input type="text" class="form-control" id="FechaI"  v-model="FechaI" name="FechaI" value="{{ old('scheduled_date',date('d-m-Y')) }}">
            </div>
            <!-- <div class="form-group col-md-6">
                <label>Fecha cerrada</label>
                <input type="text" class="form-control" id="FechaC" v-model="FechaC" name="FechaC" placeholder="Fecha cerrada" value="{{ old('scheduled_date',date('d-m-Y')) }}">
            </div> -->
        </div>
        <div class="form-row">
            <div class="form-group col-md-6" id="appV" >
                <select class="form-control" v-model="idRol" name="TDepartamento" id="TDepartamento" >
                    <option value="B" disabled selected>Selecciona departamento</option>
                    <option v-for="depart in DepartamentosT" v-if="depart.IdEmpresa=={{auth('usuarioL')->user()->Id_Empresa}}">@{{depart.Nombre}}</option>
                </select>
                <span v-if="errors.IdDepartamento" class="text-danger">@{{errors.IdDepartamento[0]}}</span>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <input type="file" name="Imagen" id="Imagen" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" name="Prioridad" id="Prioridad">
                <option value="" disabled selected>Selecciona prioridad</option>
                    <option>Baja</option>
                    <option>Media</option>
                    <option>Alta</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="Descripcion" id="Descripcion" cols="30" rows="10" placeholder="Descripcion"></textarea>
        </div>
        <button id="AñadirIncidencia" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>
</div>

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