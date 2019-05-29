@extends('layouts.master')
@section('content')


<div class="registro">
<div class="panel-heading">
                    <h1 class="panel-title">Acceso a la aplicacion</h1>
                    <h1>Bienvenido </h1>
                    <p class="registr-text">Para registrarse porfavor rellene sus datos correspondientes</p>
                </div>
    <div class="row "> 
        <div class="col-md-3"></div>
        <div class="col-md-6 col-md-offset-4">
            <div class="panel panel-default">
               
                <div class="panel-body">
                   
                    
                    <form action="{{route('login')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('email')? 'has-error' :''}}">
                            <label for="email">Email</label>
                            <input class="form-control" 
                            type="email" name="email" 
                            value="{{old('email')}}"
                            placeholder="Introduce tu email ">
                            
                            {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('password')? 'has-error' :''}}" >
                            <label for="password">Constraseña</label>
                            <input class="form-control" 
                            type="password" name="password" placeholder="Introduce tu password ">
                            {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                        </div>
                         <div class="text-right">
                         <button class="btn btn-outline-info textleft"> Acceder</button>
                         <a href="/InciarEmpleado" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Acceder Empleados</a>
                         <!-- <button class="btn btn-secondary" ><a href="">Acceder Usuario</a></button> -->

                    </div>
                    </form>
                        
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@stop