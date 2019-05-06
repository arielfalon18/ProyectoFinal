@extends('layouts.master')
@section('content')


<div class="registro">
    <div class="row "> 
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Acceso a la aplicacion</h1>
                    <h1>Bienevenido </h1>
                    <p>Para registrarse porfavor rellene sus datos correspondientes</p>
                </div>
                <div class="panel-body">
                    <div class="text-right">
                        <button class=" btn btn-primary" ><a style="color:white" href="/InciarEmpleado">Acceder Usuario</a></button>
                    </div>
                    
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
                        <button class="btn btn-primary"> Acceder</button>
                    </form>
                        
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@include('modal.modal2')
@stop