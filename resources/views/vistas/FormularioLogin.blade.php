@extends('layouts.master')
@section('content')

<div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="login100-form validate-form flex-sb flex-w" action="{{route('loginEmpleadoU')}}"  method="POST">
        {{csrf_field()}}
            <span class="login100-form-title p-b-32">
                Datos
            </span>

            <span class="txt1 p-b-11">
                Email
            </span>
            <div class="wrap-input100 validate-input m-b-36 form-group {{$errors->has('email')? 'has-error' :''}}" >
                <input class="input100 form-control" type="email"   id="email" name="email" >
            {!! $errors->first('email','<span class="help-block">:message</span>')!!} 
                <span class="focus-input100"></span>
            </div>
            
            <span class="txt1 p-b-11">
                Contraseña
            </span>
            <div class="wrap-input100 validate-input m-b-12 form-group {{$errors->has('password')? 'has-error' :''}}" >
            <span class="btn-show-pass">
                    <i class="fa fa-eye"></i>
                </span>    
            <input type="password" class="form-control input100"  name="password" id="password" >
            {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn "id="aña">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>

<!-- 
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
                    <input type="password" class="form-control"  name="password" id="password" placeholder="Introduce tu password">
                    {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                <button id="aña" class="btn btn-primary">Acceder Usuario</button>
            </form>
        </div>
        <div class="col-4">
            
        </div>
    </div>
</div> -->
@stop