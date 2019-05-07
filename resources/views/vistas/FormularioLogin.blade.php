@extends('layouts.master')
@section('content')
<div class="registro">
    <h1>Bienvenido introduce tus datos que te dio la empresa </h1>
    <div class="row">
        <div class="col-4">
            
        </div>
        <div class="col-4">
            <form action="{{url('loginEmpleadoU')}}"  method="POST">
                <div class="form-group">
                    <label for="usuarioLogin">Email</label>
                    <input type="text" class="form-control"  id="usuarioLogin" name="usuarioLogin" placeholder="Introduce tu nombre">
                </div>
                <div class="form-group ">
                    <label for="paswordLogin">Password</label>
                    <input type="text" class="form-control"  name="paswordLogin" id="paswordLogin" placeholder="Introduce tu password">
                </div>
                <button id="aña" class="btn btn-primary">Acceder Usuario</button>
            </form>
        </div>
        <div class="col-4">
            
        </div>
    </div>
</div>
@stop