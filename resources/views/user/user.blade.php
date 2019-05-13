@extends('layouts.user')
@section('content')
<div class="usuario">
    <div class="container-fluid usuario">
        <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
            <div class="row">
               
                <div class="col-lg-3 col-md-6 col-xs-12 to-do border"><h5 class="title-estados">Pendiente</h5>
                @foreach( $incidencia as $incidencia )
                    <div class="card1">
                        <p>ID: {{$incidencia->id}} Fecha-Entrada {{$incidencia->FechaEntrada}}</p>
                        <p>Estado: {{$incidencia->Estado}} </p>
                        <p>Descripcion: {{$incidencia->Descripcion}}</p>
                        <p>Descripcion: {{$incidencia->Descripcion}}</p>

                    </div>
                @endforeach          
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 doing border"><h5 class="title-estados">Progreso</h5>
                @foreach ( $progreso as $progreso)
                        <div class="card2"></div>
                        <p>{{$progreso->id}}</p>
                        <p>{{$progreso->FechaEntrada}}</p>
                        <p>{{$progreso->Estado}}</p>
                        <p>{{$progreso->Descripcion}}</p>

                @endforeach
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 finish border"><h5  class="title-estados">Finalizada</h5>
                @foreach ( $finalizada as $finalizada)
                        <div class="card3"></div>
                        <p>{{$finalizada->id}}</p>
                        <p>{{$finalizada->FechaEntrada}}</p>
                        <p>{{$finalizada->Estado}}</p>
                        <p>{{$finalizada->Descripcion}}</p>

                @endforeach

                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 cancel border"><h5  class="title-estados">Cancelada</h5>
                    @foreach ( $cancelada as $cancelada)
                        <div class="card4"></div>
                        <p>{{$cancelada->id}}</p>
                        <p>{{$cancelada->FechaEntrada}}</p>
                        <p>{{$cancelada->Estado}}</p>
                        <p>{{$cancelada->Descripcion}}</p>

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