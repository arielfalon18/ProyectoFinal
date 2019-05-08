@extends('layouts.user')
@section('content')
<div class="usuario">
    <div class="container-fluid usuario">
        <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
            <div class="row">
               
                <div class="col-lg-3 col-md-6 col-xs-12 to-do border"><h5>Pendiente</h5>
                @foreach( $incidencia as $incidencia )
                    @if( $incidencia->Estado == 'Pendiente')
                    <div class="card1">
                       

                    </div>
                    <p>ID: {{$incidencia->id}}</p>
                    <p>{{$incidencia->FechaEntrada}}</p>
                    <p>{{$incidencia->Estado}}</p>
                    <p>{{$incidencia->Descripcion}}</p>
                    <hr>
                    
                    
                </div>
                @elseif ( $incidencia->Estado == 'Progreso')
                <div class="col-lg-3 col-md-6 col-xs-12 doing border"><h5>Progreso</h5>
                    <div class="card1"></div>
                    <p>{{$incidencia->id}}</p>
                    <p>{{$incidencia->FechaEntrada}}</p>
                    <p>{{$incidencia->Estado}}</p>
                    <p>{{$incidencia->Descripcion}}</p>
                    <hr>
                    
                </div>
                @elseif ( $incidencia->Estado == 'Finalizada')
                <div class="col-lg-3 col-md-6 col-xs-12 done border"><h5>Finalizada</h5>  
                    <div class="card1"></div>
                    <p>{{$incidencia->id}}</p>
                    <p>{{$incidencia->FechaEntrada}}</p>
                    <p>{{$incidencia->Estado}}</p>
                    <p>{{$incidencia->Descripcion}}</p>
                    <hr>
                   
                </div>
                @elseif ( $incidencia->Estado == 'Cancelada')
                <div class="col-lg-3 col-md-6 col-xs-12 notposible border"><h5>Cancelada</h5> 
                    <div class="card1"></div>
                    <p>{{$incidencia->id}}</p>
                    <p>{{$incidencia->FechaEntrada}}</p>
                    <p>{{$incidencia->Estado}}</p>
                    <p>{{$incidencia->Descripcion}}</p>
                    <hr>
                    @endif
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