@extends('layouts.master')
@section('content')
    
<div class="registro">
<div class="container container-form">
        <h1 id="contactanos">CONTÁCTANOS</h1>
        <div id="info">
            <p><strong class="tipoL">Llamanos:</strong> 666 666 666</p>
            <p><strong class="tipoL">Localízanos:</strong><a href="https://www.google.es/maps/dir//Institut+Joan+d'Austria,+Carrer+de+la+Selva+de+Mar,+211,+08020+Barcelona/@41.4161975,2.1640181,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x12a4a3340ac86a75:0xf6183083d8d67bf6!2m2!1d2.1991233!2d41.4162028">Como Llegar?</a></p>
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
                    <span v-if="errors.cif" class="alert-danger">@{{errors.nombre[0]}}</span>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="cif" v-model="cif"  name="cif" placeholder="CIF">
                    <span v-if="errors.cif" class="alert-danger">@{{errors.cif[0]}}</span>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="direccion" v-model="direccion" id="direccion" placeholder="Dirección">
                <span v-if="errors.direccion" class="alert-danger">@{{errors.direccion[0]}}</span>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="ciudad" v-model="ciudad" name="ciudad" placeholder="Ciudad">
                    <span v-if="errors.ciudad" class="alert-danger">@{{errors.ciudad[0]}}</span>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="pais" v-model="pais" name="pais" placeholder="Pais">    
                    <span v-if="errors.ciudad" class="alert-danger">@{{errors.pais[0]}}</span>
                </div>
                <div class="form-group col-md-3">
                    <input type="number" class="form-control disableN" v-model="codigoP" id="codigoP" name="codigoP" placeholder="Codigo Postal">
                    <span v-if="errors.ciudad" class="alert-danger">@{{errors.codigoP[0]}}</span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="email" v-model="email" name="email" placeholder="Correo electronico">
                    <span v-if="errors.email" class="alert-danger">@{{errors.email[0]}}</span>
                </div>
                <div class="form-group col-md-6">
                    <input  type="number" class="form-control disableN" v-model="telefono"  class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    <span v-if="errors.telefono" class="alert-danger">@{{errors.telefono[0]}}</span>
                </div>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" v-model="AceptarCoockies" class="form-check-input" id="botonAceptarCo">
                <label class="form-check-label" for="exampleCheck1">He leido y acepto la política de privacidad y protección de dato <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong">
  <strong>Ver..</strong>
</button> </label> 
                <span v-if="errors.AceptarCoockies" class="alert-danger">@{{errors.AceptarCoockies[0]}}</span>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cookie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Lo primero que debes saber es que la Ley, en España y Europa, obliga a todas las páginas webs a informar a los usuarios sobre la utilización y tratamiento de cookies.

Por este motivo habrás notado, y cada vez más, que cuando accedes a una página web, aparece un aviso sobre cookies.

El artículo 22.2 de la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico (LSSI)
  establece que el usuario debe recibir información clara y completa sobre la utilización y tratamiento de datos, y a su vez,
   el usuario debe dar su consentimiento para que los sitios webs puedan utilizar dichos datos.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
    
@stop

