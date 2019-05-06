@extends('layouts.master')
@section('content')
<div class="registro">
    <h1>Bienvenido introduce tus datos que te dio la empresa </h1>
    <div class="row">
        <div class="col-4">
            
        </div>
        <div class="col-4">
            <form  action="{{route('loginEmpleadoU')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="loginN">Email</label>
                    <input type="text" class="form-control" value="{{old('loginN')}}" id="loginN" name="loginN" placeholder="Introduce tu nombre">
                    {!! $errors->first('loginN','<span class="help-block">:message</span>')!!}
                </div>
                <div class="form-group {{$errors->has('password')? 'has-error' :''}}">
                    <label for="passwordN">Password</label>
                    <input type="text" class="form-control"   name="passwordN" id="passwordN" placeholder="Introduce tu password">
                </div>
                <button id="AñadirEmpleado" class="btn btn-primary">Acceder Usuario</button>
            </form>
        </div>
        <div class="col-4">
            
        </div>
    </div>
</div>
@stop