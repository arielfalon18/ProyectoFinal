@extends('layouts.user')
@section('content')
<div id="appV" class="registro usuario">
    <div class="container-fluid" v-for="Empleat in empleadosNA" v-if="Empleat.id=={{auth('usuarioL')->user()->Id_empleado}}">
    <h2>Bienvenido/a @{{Empleat.nombre}}</h2>
    <hr>
        <div class="row">
        
            <div class="col-md-6 col-sm-12 col-12" >
                
                <h5>Tareas Para asignar</h5>
                    <table class="table" >
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Empleado</th>
                        <th scope="col">Prioridad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">AsignarT</th>
                        </tr>
                    </thead>
                    <tbody v-if="IncidenciaT.length">
                  
                            <tr v-for="(incidenciaVS,index)  in IncidenciaT" v-if="incidenciaVS.Id_Empresa == {{auth('usuarioL')->user()->Id_Empresa}} && incidenciaVS.Estado=='Pendiente'
                                && incidenciaVS.IdDepartamento=={{auth('usuarioL')->user()->Id_Departamento}}">
                                <th scope="row">@{{index + 1}}</th>
                                <td>@{{incidenciaVS.nombres_empleado.nombre}}</td>
                                <td v-if="incidenciaVS.Prioridad=='Alta'" class="text-center"> <p class="TAlta border">@{{incidenciaVS.Prioridad}}</p></td>
                                <td v-else-if="incidenciaVS.Prioridad=='Baja'" class=" text-center"><p class="TBaja border">@{{incidenciaVS.Prioridad}}</p></td>
                                <td v-else-if="incidenciaVS.Prioridad=='Media'" class=" text-center"><p class="TMedio border">@{{incidenciaVS.Prioridad}}</p></td>
                                <td><button class="btn btn-outline-info" v-on:click.prevent="MostrarDI(incidenciaVS)">Mostrar</button></td>
                                <td>
                                    <button class="btn btn-outline-success" id="BotonAs" v-on:click.prevent="datosIncidenccia(incidenciaVS)">Asignar</button>
                                 </td>    
                            </tr>
                            
                    </tbody>
                    <tbody v-else>
                         <tr >
                            <td colspan="7">
                                No hay nada de momento
                            </td>
                        </tr>
                    </tbody>
                    </table>
                   
            </div>
            <div class="col-md-6 col-sm-12  col-12">
                <h5>Tareas en Progreso</h5>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre Tecnico</th>
                            <th scope="col">Numero Incidencia</th>
                            <th scope="col">Nombre del departamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(TecnicoAsignado,index)  in IncidenciaTecni" 
                        v-if="TecnicoAsignado.mostrar_datos_incidencia.Id_Empresa == {{auth('usuarioL')->user()->Id_Empresa}} && 
                        TecnicoAsignado.Id_Departamento=={{auth('usuarioL')->user()->Id_Departamento}}">
                            <td>@{{TecnicoAsignado.Id}}</td>
                            <td>@{{TecnicoAsignado.mostrar_tecnico.nombre}}</td>
                            <td>@{{TecnicoAsignado.mostrar_datos_incidencia.id}}</td>
                            <td>@{{TecnicoAsignado.mostrar_departamento.Nombre}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 text-right">
                <button class="btn btn-outline-info" ><a href="{{route('exporPDFIncidencia')}}">Descargar PDF</a> </button>
            </div>
            <div class="col-6">
                <button class="btn btn-outline-info"><a href="{{route('exporexcelIncidencia')}}">Descargar Excel</a></button>
            </div>
        </div>
    </div>
    @include('modal.modalDI')
    @include('modal.modalAsignar')
</div>

@stop