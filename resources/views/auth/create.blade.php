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
                </div>
                <div class="panel-body">
                   <form action="{{url('nuevoR')}}" method="POST">
                   {{csrf_field()}}
                       <div class="form-group">
                           <label for="Nombre">Nombre</label>
                           <input type="text" class="from-control" name="name" id="Nombre">
                       </div>
                       <div class="form-group">
                           <label for="correoElectronico">Correo electronico</label>
                           <input type="email" class="from-control" name="correr" id="correoElectronico">
                       </div>
                       <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" class="from-control" name="password">
                       </div>
                       <div class="form-group">
                           <label for="Rpassword">Confirmar Password</label>
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