@extends('layouts.master')
@section('content')
<div class="registro">
    <h1>Bienvenido introduce tus datos que te dio la empresa </h1>
    <div class="row">
        <div class="col-4">
            
        </div>
        <div class="col-4">
            <form action="{{route('loginEmpleadoU')}}"  method="POST">
            {{csrf_field()}}
                <div class="form-group {{$errors->has('email')? 'has-error' :''}}">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"  id="email" name="email" placeholder="Introduce tu nombre">
                    {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                </div>
                <div class="form-group {{$errors->has('password')? 'has-error' :''}}">
                    <label for="password">Password</label>
                    <input type="text" class="form-control"  name="password" id="password" placeholder="Introduce tu password">
                    {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                <button id="aña" class="btn btn-primary">Acceder Usuario</button>
            </form>
        </div>
        <div class="col-4">
            
        </div>
    </div>
</div>
@stop