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
                                        <td>@{{empleadoD.Rol}}</td>
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
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ejemplo1></ejemplo1>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
<!-- <h1 v-for="empleadoD in empleadosNA">@{{empleadoD.nombre}}</h1> -->
@include('modal.modal')
@stop