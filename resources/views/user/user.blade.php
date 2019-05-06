@extends('layouts.user')
@section('content')
<div class="usuario">
    <div class="container-fluid usuario">

        
        <button id="incidencia" class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia</button>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12 to-do border">TO DO
                    <div class="card1"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 doing border">IN PROGRES  
                    <div class="card1"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 done border">DONE  
                    <div class="card1"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 notposible border">NOT POSIBLE  
                    <div class="card1"></div>
                </div>
            </div>
        
    </div>
    <!-- <div class="container">
        <button class="btn btn-primary" data-toggle="modal" data-target="#crearincidencia">Crear incidencia></button>
    </div> -->




<!-- MODAL INCIDENCIA -->
<div class="modal fade" id="crearincidencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar incidencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un usuario a la base de datos  -->
        <form  method="post"   >
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="FechaI"  v-model="FechaI" name="FechaI" placeholder="Fecha incidencia">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="FechaC" v-model="FechaC" name="FechaC" placeholder="Fecha Cierre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <select class="form-control" name="Categoria" id="Categoria" >
                    <option>Categoria1</option>
                    <option>Categoria2</option>
                    <option>Categoria3</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="Estado" v-model="Estado" name="Estado" placeholder="Estado">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <input type="file" name="Imagen" id="Imagen" class="form-control" v-model="Imagen">
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" name="Prioridad" id="Prioridad">
                    <option>Baja</option>
                    <option>Media</option>
                    <option>Alta</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="Descripcion" id="Descripcion" cols="30" rows="10" placeholder="Descripcion"></textarea>
        </div>
        <button id="AñadirIncidencia" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>
</div>