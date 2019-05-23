<!--  -->
<div class="modal fade" id="añadirusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar a empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un usuario a la base de datos  -->
        <form  method="POST"   v-on:submit.prevent="nuevoEmpreados">
        <div class="form-row" v-model="id={{auth()->user()->id}}">
            <div class="form-group col-md-7">
            <!-- v-model="nombre" -->
                <input type="text" class="form-control" id="nombreT"  v-model="nombreT" name="nombreT" placeholder="Introduce su nombre">
                <span v-if="errors.nombre" class="text-danger">@{{errors.nombre[0]}}</span>
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="dniT" v-model="dniT"   name="dniT" placeholder="DNI">
                <span v-if="errors.dni" class="text-danger">@{{errors.dni[0]}}</span>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="emailT" v-model="emailT"  id="emailT" placeholder="Introduce el email">
            <span v-if="errors.email" class="text-danger">@{{errors.email[0]}}</span>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="telefonoT" v-model="telefonoT"  name="telefonoT" placeholder="Telefono">
                <span v-if="errors.telefono" class="text-danger">@{{errors.telefono[0]}}</span>
            </div>
            <div class="form-group col-md-6">
              <select class="form-control" v-model="idRol" name="TDepartamento" id="TDepartamento" >
                  <option value="B" disabled selected>Selecciona departamento</option>
                  <option v-for="dapart in DepartamentosT" v-if="dapart.IdEmpresa=={{auth()->user()->id}}">@{{dapart.Nombre}}</option>
              </select>
              <span v-if="errors.IdDepartamento" class="text-danger">@{{errors.IdDepartamento[0]}}</span>
              
            </div>
        </div>
        <div class="form-group">
          <select  class="form-control" v-model="selected" name="TipoEmpleado" id="TipoEmpleado" >
                <option value="A" disabled selected>Selecciona tipo de usuario</option>
                <option >Usuario</option>
                <option >Personal</option>
                <option >Tecnico</option>
                
          </select>
          <span v-if="errors.Idrol" class="text-danger">@{{errors.Idrol[0]}}</span>
        </div>
        <button id="AñadirEmpleado" class="btn btn-primary">Añadir</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PARA AÑADIR DEPARTAMENTO -->
<div class="modal fade" id="añadirdepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar departamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un departamento a la base de datos  -->
        <form  method="post" v-on:submit.prevent="CreateDepartament">
        
        <div class="form-group" v-model="id={{auth()->user()->id}}">
            <input type="text" class="form-control" id="nombreD" v-model="nombreD" name="nombreD" placeholder="Departamento">
            <span v-if="errors.Nombre" class="text-danger">@{{errors.Nombre[0]}}</span>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text" class="form-control" name="EdificioD" v-model="EdificioD" id="EdificioD" placeholder="Edificio">
                <span v-if="errors.Edificio" class="text-danger">@{{errors.Edificio[0]}}</span>
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control"  id="plantaD" v-model="plantaD" name="plantaD" placeholder="Planta">
                <span v-if="errors.Planta" class="text-danger">@{{errors.Planta[0]}}</span>
                <span v-else-if="errors.Planta !=1" ></span>
            </div>
        </div>
            <button id="AñadirEmpleado" class="btn btn-primary">Añadir</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Añadir inventario -->
<div class="modal fade" id="añadirinventario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregamos un inventario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un departamento a la base de datos  -->
        <form  method="post" v-on:submit.prevent="NuevoInvenatario">
        <div class="form-group" v-model="id={{auth()->user()->id}}">
          <select  class="form-control" v-model="Nempleado" name="Nempleado" id="Nempleado" >
                <option value="C" disabled selected>Selecciona un empleado</option>
                <!-- No te lo hace por algo de Laravel asi que tendras que pillar otra forma pero esto te decia que muestre todo y te lo haga  -->
                <option  v-for="empleadoD in empleadosNA" v-if="empleadoD.IdEmpresa=={{auth()->user()->id}}">@{{empleadoD.nombre}}</option>
                
          </select>
          <span v-if="errors.idEmpleado" class="text-danger">@{{errors.idEmpleado[0]}}</span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  v-model="nombreI"  id="nombreI" name="nombreI" placeholder="Nombre Inventario">
            <span v-if="errors.nombre" class="text-danger">@{{errors.nombre[0]}}</span>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="tipoI"  v-model="tipoI"  id="tipoI" placeholder="Tipo Inventorio">
          <span v-if="errors.tipo" class="text-danger">@{{errors.tipo[0]}}</span>
        </div>
        <div class="form-group">
                <textarea class="form-control" name="DescripcionI"  v-model="DescripcionI"  id="DescripcionI" cols="30" rows="10" placeholder="Descripcion de Inventorio"></textarea>
                <span v-if="errors.descripcion" class="text-danger">@{{errors.descripcion[0]}}</span>
        </div>
        <button id="NuevoInvenatario" class="btn btn-primary">Añadir</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Exportamos el CSV Departamento-->
<div class="modal fade bd-example-modal-lg" id="ImportCSV" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar CSV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel panel-sm">
          
          <div class="panel-body">
          <form  action="{{url('importCSV')}}" method="POST" name="importform" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
              <label for="csv_file" class="control-label col-sm-3">CSV fichero</label>
                <input type="file"  id="csv_file" name="csv_file" class="form-control-file">
            </div>  
              <button  class="btn btn-primary">Enviar</button>
            </form>
                  <!-- <table class="table">
                    <thead>
                      <tr>
                        <th cope="col" v-for="key in parse_header"
                            :class="{ active: sortKey == key }">
                          @{{key}}
                        </th>
                      </tr>
                    </thead> 
                      <tr v-for="csv in parse_csv">
                        <td v-for="key in parse_header" v-model="datos=parse_csv">
                          @{{csv[key]}}
                        </td>
                      </tr>
                  </table> -->
               
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Export empleado  -->
<div class="modal fade bd-example-modal-lg" id="ImportCSVE" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar CSV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel panel-sm">
          
          <div class="panel-body">
          <form  action="{{url('importCSVEmpleado')}}" method="POST" name="importform" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
              <label for="csv_fileE" class="control-label col-sm-3">CSV fichero</label>
                <input type="file"  id="csv_fileE" name="csv_fileE" class="form-control-file">
            </div>  
              <button  class="btn btn-primary">Enviar</button>
            </form>
                  <!-- <table class="table">
                    <thead>
                      <tr>
                        <th cope="col" v-for="key in parse_header"
                            :class="{ active: sortKey == key }">
                          @{{key}}
                        </th>
                      </tr>
                    </thead> 
                      <tr v-for="csv in parse_csv">
                        <td v-for="key in parse_header" v-model="datos=parse_csv">
                          @{{csv[key]}}
                        </td>
                      </tr>
                  </table> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>