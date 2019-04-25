@extends('layouts.master')
@section('content')

<div class="registro">
    <div class="container container-form">
        <h1 class="align-center" id="letra">REGISTRO</h1>
        <form action="{{url('nuevoR')}}" method="POST">
        {{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre empresa">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="cif"  name="cif" placeholder="CIF">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="pais" name="pais" placeholder="Pais">
            </div>
            <div class="form-group col-md-3">
                <input type="number" class="form-control disableN" id="codigoP" name="codigoP" placeholder="Codigo Postal">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Correo electronico">
            </div>
            <div class="form-group col-md-6">
                <input  type="number" class="form-control disableN"  class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-6">
                <input type="password" class="form-control" id="Cpassword"  name="Cpassword" placeholder="Confirmar Contraseña">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</div>
@stop