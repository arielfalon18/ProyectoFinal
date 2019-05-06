@extends('layouts.master')
@section('content')
    
<div class="registro">
<div class="container container-form">
        <h1 id="contactanos">CONTÁCTANOS</h1>
        <div id="info">
            <p><strong class="tipoL">Llamanos:</strong> 666 666 666</p>
            <p><strong class="tipoL">Localízanos:</strong></p>
            <p>Carrer de la Selva de Mar, 211, 08020 Barcelona</p>
            <p>Theincidence@incidence.org</p>
        </div>
        <div class="alert alert-success" v-if="respuestaEmpresa" role="alert">
            Registro completo
        </div>
        <h1 class="align-center" id="letra">DATOS EMPRESARIALES</h1>
        <form  method="post" v-on:submit.prevent="NuevaContratacion">
        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" v-model="nombre" id="nombre" name="nombre" placeholder="Nombre empresa">
                    <span v-for="error in errors" class="text-danger">@{{error.nombre}}</span>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="cif" v-model="cif"  name="cif" placeholder="CIF">
                    <span v-for="error in errors" class="text-danger">@{{error.cif}}</span>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="direccion" v-model="direccion" id="direccion" placeholder="Dirección">
                <span v-for="error in errors" class="text-danger">@{{error.direccion}}</span>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="ciudad" v-model="ciudad" name="ciudad" placeholder="Ciudad">
                    <span v-for="error in errors" class="text-danger">@{{error.ciudad}}</span>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="pais" v-model="pais" name="pais" placeholder="Pais">
                    <span v-for="error in errors" class="text-danger">@{{error.pais}}</span>
                </div>
                <div class="form-group col-md-3">
                    <input type="number" class="form-control disableN" v-model="codigoP" id="codigoP" name="codigoP" placeholder="Codigo Postal">
                    <span v-for="error in errors" class="text-danger">@{{error.codigoP}}</span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="email" v-model="email" name="email" placeholder="Correo electronico">
                    <span v-for="error in errors" class="text-danger">@{{error.email}}</span>
                </div>
                <div class="form-group col-md-6">
                    <input  type="number" class="form-control disableN" v-model="telefono"  class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    <span v-for="error in errors" class="text-danger">@{{error.telefono}}</span>
                </div>
            </div>
            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="Cpassword"  name="Cpassword" placeholder="Confirmar Contraseña">
                </div>
            </div> -->
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>     
    </div>
</div>
    
@stop

