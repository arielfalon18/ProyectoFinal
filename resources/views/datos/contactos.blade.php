@extends('layouts.master')
@section('content')
    <h1 id="contactanos">CONTÁCTANOS</h1>
    <div id="info">
        <p><strong>Llamanos:</strong> 666 666 666</p>
        <p><strong>Localízanos:</strong> Carrer de la Selva de Mar, 211, 08020 Barcelona</p>
        <p>Theincidence@incidence.org</p>
    </div>
    <div class="container">
        <form>
        <div class="row styloRow">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="row styloRow">
            <div class="col">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Repite Email">
            </div>
        </div>
        </form>     
    </div>
    
@stop

