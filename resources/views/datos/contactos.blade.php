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
        <form>
        <div class="row styloRow">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control disableN" placeholder="Telefono">
            </div>
        </div>
        <div class="row styloRow">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Repite Email">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea class="form-control" id="mensaje" rows="3" placeholder="Mensaje.."></textarea>
            </div>
        </div>
        <div class="row styloRow">
            <div class="form-group col-md-6">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </form>     
    </div>
</div>
    
@stop

