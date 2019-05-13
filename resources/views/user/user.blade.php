@extends('layouts.user')
@section('content')
<div class="usuario">
    <div class="container-fluid usuario">
        <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
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
                        
                        <p>Estado: {{$incidencia->Estado}} </p>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">ver mas</button>

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
                        
                        <p>Estado: {{$progreso->Estado}} </p>
                    </div>
                        <a href="#" class="boton-info-inc btn btn-primary">Ver mas</a>
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
                        
                        <p>Estado: {{$finalizada->Estado}} </p>
                    </div>
                        <a href="#" class="boton-info-inc btn btn-primary">Ver mas</a>
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
                        
                        <p>Estado: {{$cancelada->Estado}} </p>
                    </div>
                    <button type="button" data-toggle="modal" data-target="#myModal">Launch modal</button>
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
        <form method="POST" action="{{url('/incidencia/newIncidencia')}}">
            {{ csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha incidencia</label>
                <input type="text" class="form-control" id="FechaI"  v-model="FechaI" name="FechaI" value="{{ old('scheduled_date',date('d-m-Y')) }}">
            </div>
            <div class="form-group col-md-6">
                <label>Fecha cerrada</label>
                <input type="text" class="form-control" id="FechaC" v-model="FechaC" name="FechaC" placeholder="Fecha cerrada" value="{{ old('scheduled_date',date('d-m-Y')) }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <select class="form-control" name="Categoria" id="Categoria" >
                <option value="" disabled selected>Selecciona categoria</option>
                    <option>Categoria1</option>
                    <option>Categoria2</option>
                    <option>Categoria3</option>
                </select>
            </div>
            <!-- <div class="form-group col-md-6">
                <input type="text" class="form-control" id="Estado" v-model="Estado" name="Estado" placeholder="Estado">
            </div> -->
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
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>