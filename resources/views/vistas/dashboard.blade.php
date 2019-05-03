@extends('layouts.master')
@section('content')

<!-- Quitar lo de registro  -->
<div class="registro">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-12">
                <div class="alert alert-success" v-if="seBorro" role="alert">
                    Se elimino correctamente 
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Bienvenido {{auth()->user()->nombre}}</h1>
                        <!-- <h1>Bienevenido {{auth()->user()->id}}</h1> -->
                        
                    </div>
                    <div class="panel-body">
                        
                        <div>
                            <div class="btn-logout">
                                <form method="POST" action="{{ route('logout')}}">
                                    {{ csrf_field()}}
                                    <button class="btn btn-danger"> Cerrar sesion</button>
                                </form>
                            </div>
                            <div class="espacio">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#añadirdepartamento">Añadir Departamentos</button>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#añadirinventario">Añadir Inventario</button>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#añadirusuario">Añadir Usuario</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                        <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Tipo Usuario</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody v-for="empleadoD in empleados">
                                    <tr v-if='empleadoD.IdEmpresa=={{auth()->user()->id}}'>
                                        <th scope="row">@{{empleadoD.id}}</th>
                                        <td>@{{empleadoD.nombre}}</td>
                                        <td>@{{empleadoD.dni}}</td>
                                        <td>@{{empleadoD.email}}</td>
                                        <td>@{{empleadoD.telefono}}</td>
                                        <td>@{{empleadoD.tipo_usuario}}</td>
                                        <td><button class="btn btn-primary" v-on:click.prevent="deleteempleado(empleadoD)">Borrar</button><td>                                        
                                    </tr>
                                <tbody>
                            </table>
                        </div>
                            
                                <!-- Paginacion con esto hace la paginacion de la tabla -->
                                <nav  aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item" v-if="pagination.current_page > 1">
                                            <a class="page-link" href="#" @click.prevent="cambiodePagina(pagination.current_page - 1)">
                                                <span>Atras</span>
                                            </a>
                                        </li>
                                        <li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                                            <a class="page-link" href="#" @click.prevent="cambiodePagina(page)">
                                                @{{page}}
                                            </a>
                                        </li>
                                        <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                            <a class="page-link" href="#" @click.prevent="cambiodePagina(pagination.current_page + 1)">
                                                <span>Siguiente</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                               

                                <div v-else class="alert alert-dark" role="alert">
                                    <span >No hay nada </span>
                                </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('modal.modal')



@stop