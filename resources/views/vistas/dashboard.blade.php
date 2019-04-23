@extends('layouts.master')
@section('content')


<div class="">
    <div class="row "> 
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Bienevenido {{auth()->user()->name}}</h1>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('logout')}}">
                        {{ csrf_field()}}

                        <button class="btn btn-danger"> Cerrar sesion</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
@stop