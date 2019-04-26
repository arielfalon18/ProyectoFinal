@extends('layouts.master')
@section('content')

<!-- Quitar lo de registro  -->
<div class="registro">
    <div class="row "> 
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Bienevenido {{auth()->user()->nombre}}</h1>
                </div>
                <div class="panel-body">
                    <div>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#añadirusuario">Añadir Usuario</button>
                    </div>
                    <hr>
                    <form action="" method="post"></form>

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
<div class="modal fade" id="añadirusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar a un usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un usuario a la base de datos  -->
        <form>
          <div class="form-group">
            <label for="nombreE" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreE" id="nombreE">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
@stop