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
            Revisa el correo 
        </div>
        <h1 class="align-center" id="letra">DATOS EMPRESARIALES</h1>
        <form  method="post" v-on:submit.prevent="NuevaContratacion">
        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" v-model="nombre" id="nombre" name="nombre" placeholder="Nombre empresa">
                    <span v-if="errors.nombre" class="text-danger">@{{errors.nombre[0]}}</span>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="cif" v-model="cif"  name="cif" placeholder="CIF">
                    <span v-if="errors.cif" class="text-danger">@{{errors.cif[0]}}</span>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="direccion" v-model="direccion" id="direccion" placeholder="Dirección">
                <span v-if="errors.direccion" class="text-danger">@{{errors.direccion[0]}}</span>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="ciudad" v-model="ciudad" name="ciudad" placeholder="Ciudad">
                    <span v-if="errors.ciudad" class="text-danger">@{{errors.ciudad[0]}}</span>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="pais" v-model="pais" name="pais" placeholder="Pais">    
                    <span v-if="errors.ciudad" class="text-danger">@{{errors.pais[0]}}</span>
                </div>
                <div class="form-group col-md-3">
                    <input type="number" class="form-control disableN" v-model="codigoP" id="codigoP" name="codigoP" placeholder="Codigo Postal">
                    <span v-if="errors.ciudad" class="text-danger">@{{errors.codigoP[0]}}</span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="email" v-model="email" name="email" placeholder="Correo electronico">
                    <span v-if="errors.email" class="text-danger">@{{errors.email[0]}}</span>
                </div>
                <div class="form-group col-md-6">
                    <input  type="number" class="form-control disableN" v-model="telefono"  class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    <span v-if="errors.telefono" class="text-danger">@{{errors.telefono[0]}}</span>
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

