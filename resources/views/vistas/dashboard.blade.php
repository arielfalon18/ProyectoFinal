@extends('layouts.master')
@section('content')

<!-- Quitar lo de registro  -->
<div class="registro">
    <div class="row "> 
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Bienevenido {{auth()->user()->nombre}}</h1>
                    <h1 ng-controller="HelloWorldCtrl">@{{message}}</h1>
                    <h1 ng-controller="HelloWorldCtrl2">@{{message}}</h1>
                </div>
                <div class="panel-body">
                    <div>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#añadirusuario">Añadir Usuario</button>
                    </div>
                    <hr>
                    <form action="" method="post"></form>

                    <form method="POST" action="{{ route('logout')}}">
                        {{ csrf_field()}}
                        <button class="btn btn-danger"> Cerrar sesion</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
<div class="modal fade" id="añadirusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar a empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un usuario a la base de datos  -->
        <form action="{{url('nuevoR')}}" method="POST">
        {{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text" class="form-control" id="nombreT" name="nombreT" placeholder="Introduce su nombre">
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="dniT"  name="dniT" placeholder="DNI">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="emailT" id="emailT" placeholder="Introduce el email">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="telefonoT" name="telefonoT" placeholder="Telefono">
            </div>
            <div class="form-group col-md-6">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Tecnico</option>
                <option>Usuario</option>

            </select>
            </div>
        </div>
        <button id="AñadirEmpleado" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop