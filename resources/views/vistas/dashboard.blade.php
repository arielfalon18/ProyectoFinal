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
                  
                  <button class="btn btn-primary" data-toggle="modal" data-target="#ImportCSV">Importar Tabla Departamentos</button>

                  <button class="btn btn-primary" data-toggle="modal" data-target="#ImportCSVE">Importar Tabla Empleados</button>
              </div>
            </div>
            <!-- ACORDIOM -->
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Ver departamento
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                  
                  <!-- Template Abierto -->
                  
                    <template id="app-tablaD">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#añadirdepartamento">Añadir Departamentos</button>
                      <hr>
                      <div class="table-responsive">
                        <table class="table" >
                          <thead>
                              <tr>
                                  <th scope="col">Id <i class="fa fa-sort" @click="orderByDepartamento('id')" ></i></th>
                                  <th scope="col">Nombre <i class="fa fa-sort" @click="orderByDepartamento('Nombre')" ></i></th>
                                  <th scope="col">Planta <i class="fa fa-sort" @click="orderByDepartamento('Planta')" ></i></th>
                                  <th scope="col">Edificio <i class="fa fa-sort" @click="orderByDepartamento('Edificio')" ></i></th>
                                  <th scope="col">IdEmpresa </th>
                              </tr>
                          </thead>
                          <tbody v-for="DepartamentosA in DepartamentosT">
                              <tr v-if='DepartamentosA.IdEmpresa=={{auth()->user()->id}}'>
                                  <th scope="row">@{{DepartamentosA.id}}</th>
                                  <td>@{{DepartamentosA.Nombre}}</td>
                                  <td>@{{DepartamentosA.Planta}}</td>
                                  <td>@{{DepartamentosA.Edificio}}</td>
                                  <td>@{{DepartamentosA.IdEmpresa}}</td>
                              </tr>
                          <tbody>
                        </table>
                      </div>
                      <!-- Final Resposible table -->
                        <!-- <nav  aria-label="Page navigation example">
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
                        </nav> -->
                        <div v-else class="alert alert-dark" role="alert">
                            <span >No hay nada </span>
                        </div>
                    </template>
                  <!-- Cierre de template -->
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ver inventario
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#añadirinventario">Añadir Inventario</button>
                    <hr>
                    En proceso
                    <div class="table-responsive">
                      <table class="table" >
                        <thead>
                          <tr>
                            <th scope="col">Id <span class="arrow" ></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descripcion</th>
                          </tr>
                        </thead>
                        <tbody v-for="(empleadoD,key) in empleados">
                          <tr v-if='empleadoD.IdEmpresa=={{auth()->user()->id}}'>
                            <th scope="row">@{{empleadoD.id}}</th>
                            <td>@{{empleadoD.nombre}}</td>
                            <td>@{{empleadoD.dni}}</td>
                            <td>@{{empleadoD.email}}</td>
                            <td>@{{empleadoD.telefono}}</td>
                            <td>@{{empleadoD.departamentos.Nombre}}</td>
                            <td>@{{empleadoD.Rol}}</td>
                            <td><button class="btn btn-primary" v-on:click.prevent="deleteempleado(empleadoD)">Borrar</button><td>                                        
                          </tr>
                        <tbody>
                      </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Ver empleados
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <!-- Template Abierto -->
                    <template id="app-tabla">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#añadirusuario">Añadir Usuario</button>
                      <hr>
                      <div class="table-responsive">
                        <table class="table" >
                          <thead>
                              <tr>
                               
                                  <th scope="col">Id <span class="arrow" ></th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">DNI</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Telefono</th>
                                  <th scope="col">Departamentos</th>
                                  <th scope="col">Tipo Usuario</th>
                                  <th scope="col">Acciones</th>
                              </tr>
                          </thead>
                          <tbody v-for="(empleadoD,key) in empleados">
                              <tr v-if='empleadoD.IdEmpresa=={{auth()->user()->id}}'>
                                  
                                  <th scope="row">@{{empleadoD.id}}</th>
                                  <td>@{{empleadoD.nombre}}</td>
                                  <td>@{{empleadoD.dni}}</td>
                                  <td>@{{empleadoD.email}}</td>
                                  <td>@{{empleadoD.telefono}}</td>
                                  <td>@{{empleadoD.departamentos.Nombre}}</td>
                                  <td>@{{empleadoD.Rol}}</td>
                                  <td><button class="btn btn-primary" v-on:click.prevent="deleteempleado(empleadoD)">Borrar</button><td>                                        
                              </tr>
                          <tbody>
                        </table>
                      </div>
                      <!-- Final Resposible table -->
                        <nav  aria-label="Page navigation example">
                            <ul class="pagination">
                                <li  v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiodePagina(pagination.current_page - 1)">
                                        <span>Atras</span>
                                    </a>
                                </li>
                                <li  v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="cambiodePagina(page)">
                                        @{{page}}
                                    </a>
                                </li>
                                <li v-if="pagination.current_page < pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="cambiodePagina(pagination.current_page + 1)">
                                        <span>Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                      <div v-else class="alert alert-dark" role="alert">
                          <span >No hay nada </span>
                      </div>
                    </template>
                    <!-- Cierre de template -->
                  </div>
                </div>
              </div>
            </div>
            <form id="Formulario" v-on:submit.prevent="NotificarErrores" class="info-form imagenOpinion" >
              <span class="colorLetraForm">¿Notificar Errores?</span>
              <span id="pressionaF" class="PreccionaA">Click aquí</span>
              <span id="close" class="CerrarF">x</span>
              <div id="popup-open">
                <input class="input input-100 inputFormE" name="email" id="emailE" type="email"  disabled value="{{auth()->user()->email}}">
                <textarea  class="input input-100 mensajeFB" name="asunto" v-model="mensaje" placeholder="Déjanos tu teléfono y un mensaje"></textarea>
                <input  class="input-submit input input-100 mensajeFB" type="submit" value="Enviar mensaje">
                <div id="response_2"></div>
            </div>
          </form>

            <!-- FINAL ACORDIOM -->
          </div>
        </div>
        @include('modal.modal')
      </div>
    </div>
  </div>
</div>

<!-- <h1 v-for="empleadoD in empleadosNA">@{{empleadoD.nombre}}</h1> -->

@stop