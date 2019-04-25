@extends('layouts.master')
@section('content')


<div class="">
    <div class="row "> 
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Registrarse</h1>
                    <p>Bienvenido para registrarse es nuestra base de datos por favor resgistrarse</p>
                    <p>Bienvenido, para poder utilizar nuestro servicios, por favor registrase</p>
                </div>
                <div class="panel-body">
                   <form action="{{url('nuevoR')}}" method="POST">
                   {{csrf_field()}}
                       <div class="form-group">
                           <label for="nombre">Nombre empresa: </label>
                           <input type="text" class="from-control" name="nombre" id="nombre">
                       </div>
                       <div class="form-group">
                           <label for="cif">CIF: </label>
                           <input type="text" class="from-control" name="cif" id="cif">
                       </div>
                       <div class="form-group">
                           <label for="direccion">Dirección: </label>
                           <input type="text" class="from-control" name="direccion" id="dirreccion">
                       </div>
                       <div class="form-group">
                           <label for="telefono">Telefono: </label>
                           <input type="number" class="from-control" name="telefono" id="telefono" maxlength="9">
                       </div>
                       <div class="form-group">
                           <label for="telefono">Poblacion: </label>
                           <input type="text" class="from-control" name="poblacion" id="poblacion">
                       </div>
                       <div class="form-group">
                           <label for="email">Correo electronico: </label>
                           <input type="email" class="from-control" name="email" id="email">
                       </div>
                       <div class="form-group">
                           <label for="password">Password: </label>
                           <input type="password" class="from-control" name="password">
                       </div>
                       <div class="form-group">
                           <label for="Rpassword">Confirmar Password: </label>
                           <input type="password" class="from-control" id="Rpassword">
                       </div>
                       <button class="btn btn-primary">Registrarse</button>
                   </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
@stop