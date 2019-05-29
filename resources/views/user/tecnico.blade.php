@extends('layouts.user')
@section('content')

<div id="appV" class="usuario">
    <div class="alert alert-success" v-if="mensajeRealizado" role="alert">
        Incidencia Resuelta
    </div>
    <div class="container-fluid">
        
        <div v-for="empleat in empleadosNA" v-if="empleat.id=={{auth('usuarioL')->user()->Id_empleado}}"> 
        <h2 >Bienvenido/a @{{empleat.nombre}} </h2>
            <table id="TecnicoTable" class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID <i class="fa fa-sort" @click="orderByIncidenciaTecnico('id')" ></i></th>
                <th scope="col">Descripcion <i class="fa fa-sort" @click="orderByIncidenciaTecnico('mostrar_datos_incidencia.Descripcion')" ></i></th>
                <th scope="col">Estado</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Ver detalles</th>
                <th scope="operaciones">Resolver</th>
                </tr>
            </thead>
            <tbody v-if="IncidenciaTecni.length">
                <tr  v-for="(incidenciaVS,index)  in IncidenciaTecni" v-if="incidenciaVS.id_Tecnico=={{auth('usuarioL')->user()->Id_empleado}} 
                    && incidenciaVS.mostrar_datos_incidencia.Id_Empresa=={{auth('usuarioL')->user()->Id_Empresa}} 
                    && incidenciaVS.Id_Departamento == {{auth('usuarioL')->user()->Id_Departamento}}">
                    <td>@{{incidenciaVS.mostrar_datos_incidencia.id}}</td>
                    <td id="ocultar-info">@{{incidenciaVS.mostrar_datos_incidencia.Descripcion}}</td>
                    <td>@{{incidenciaVS.mostrar_datos_incidencia.Estado}}</td>
                    <td v-if="incidenciaVS.mostrar_datos_incidencia.Prioridad=='Alta'" class=" text-center"> <p class="TAlta border">@{{incidenciaVS.mostrar_datos_incidencia.Prioridad}}</p></td>
                    <td v-else-if="incidenciaVS.mostrar_datos_incidencia.Prioridad=='Baja'" class="text-center"><p class="TBaja border">@{{incidenciaVS.mostrar_datos_incidencia.Prioridad}}</p></td>
                    <td v-else-if="incidenciaVS.mostrar_datos_incidencia.Prioridad=='Media'" class="text-center"><p class="TMedio border">@{{incidenciaVS.mostrar_datos_incidencia.Prioridad}}</p></td>
                    <td><button class="btn btn-outline-info" v-on:click.prevent="MostrarDetallesTecnico(incidenciaVS)">Ver Detalles</button></td>
                    <td>
                        <span v-if="incidenciaVS.mostrar_datos_incidencia.Estado =='Finalizada' || incidenciaVS.mostrar_datos_incidencia.Estado =='Cancelada'">
                            <button class="btn btn-outline-primary"  v-on:click.prevent="Resultado(incidenciaVS)" id="Resultado" disabled>Resolver</button>
                        </span>
                        <span v-else>
                        <button class="btn btn-outline-primary"   v-on:click.prevent="Resultado(incidenciaVS)" id="Resultado">Resolver</button>
                        </span>
                    </td>
                </tr>
            </tbody>
            
            <tbody v-else>
                <tr>
                    <td colspan="7">
                        No tienes ninguna incidencia de momento
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
      <!-- Llamamos al modelo que queremos ablirlo -->
      @include('modal.modalTecnicoD')
    </div>

@stop
