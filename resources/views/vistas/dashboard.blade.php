@extends('layouts.master')
@section('content')

<!-- Quitar lo de registro  -->
<div class="registro">
    <div class="container">
        <div class="row"> 
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-offset-4">
            <div class="alert alert-success" v-if="seBorro" role="alert">
                Se elimino correctamente 
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Bienevenido {{auth()->user()->nombre}}</h1>
                        
                        
                    </div>
                    <div class="panel-body">
                        
                        <div>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#añadirusuario">Añadir Usuario</button>
                        </div>
                        <hr>
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Tipo Usuario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="empleadoD in empleados">
                                    <th scope="row">@{{empleadoD.id}}</th>
                                    <td>@{{empleadoD.nombre}}</td>
                                    <td>@{{empleadoD.dni}}</td>
                                    <td>@{{empleadoD.email}}</td>
                                    <td>@{{empleadoD.telefono}}</td>
                                    <td>@{{empleadoD.tipo_usuario}}</td>
                                    <td><button class="btn btn-primary" v-on:click.prevent="deleteempleado(empleadoD)">Borrar</button><td>
                                </tr>
                            <tbody>
                        </table>
                       
                        <hr>


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
        <form  method="post"   v-on:submit.prevent="nuevoEmpreados">
        
        <div class="form-row" v-model="id={{auth()->user()->id}}">
            <div class="form-group col-md-7">
            <!-- v-model="nombre" -->
                <input type="text" class="form-control" id="nombreT"  v-model="nombreT" name="nombreT" placeholder="Introduce su nombre">
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="dniT" v-model="dniT"   name="dniT" placeholder="DNI">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="emailT" v-model="emailT"  id="emailT" placeholder="Introduce el email">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="telefonoT" v-model="telefonoT"  name="telefonoT" placeholder="Telefono">
            </div>
            <div class="form-group col-md-6">
            <select class="form-control" name="TipoEmpleado" id="TipoEmpleado" >
                <option>Tecnico</option>
                <option>Usuario</option>
            </select>
            </div>
            <span v-for="error in errors" class="text-danger">@{{error}}</span>
        </div>

        <button id="AñadirEmpleado" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop