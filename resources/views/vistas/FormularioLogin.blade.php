@extends('layouts.master')
@section('content')
<div class="registro">
    <h1>Bienvenido introduce tus datos que te dio la empresa </h1>
    <div class="row">
        <div class="col-4">
            
        </div>
        <div class="col-4">
            <form action="{{url('loginEmpleadoU')}}"  method="POST">
            {{csrf_field()}}
                <div class="form-group {{$errors->has('usuarioLogin')? 'has-error' :''}}">
                    <label for="usuarioLogin">Email</label>
                    <input type="email" class="form-control"  id="usuarioLogin" name="usuarioLogin" placeholder="Introduce tu nombre">
                    {!! $errors->first('usuarioLogin','<span class="help-block">:message</span>')!!}
                </div>
                <div class="form-group {{$errors->has('password')? 'has-error' :''}}">
                    <label for="paswordLogin">Password</label>
                    <input type="text" class="form-control"  name="paswordLogin" id="paswordLogin" placeholder="Introduce tu password">
                    {!! $errors->first('paswordLogin','<span class="help-block">:message</span>')!!}
                </div>
                <button id="aña" class="btn btn-primary">Acceder Usuario</button>
            </form>
        </div>
        <div class="col-4">
            
        </div>
    </div>
</div>
@stop