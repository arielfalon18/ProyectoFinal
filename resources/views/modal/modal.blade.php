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
        <form  method="post" action="{{url('/inventario/NewInvenatario')}}">
        {{ csrf_field()}}
        <div class="form-group">
          <select  class="form-control" name="Nempleado" id="Nempleado" >
                <option  disabled selected>Selecciona un empleado</option>
                <!-- No te lo hace por algo de Laravel asi que tendras que pillar otra forma pero esto te decia que muestre todo y te lo haga  -->
                <option v-for="empleadoD in empleadosNA" v-if="dapart.id=={{auth()->user()->id}}">@{{empleadoD.nombre}}</option>
          </select>
          <!-- <span v-if="errors.Idrol" class="text-danger">@{{errors.Idrol[0]}}</span> -->
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nombreI" name="nombreI" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="tipoI" id="tipoI" placeholder="Tipo">
        </div>
       
        <div class="form-group">
                <textarea class="form-control" name="DescripcionI" id="DescripcionI" cols="30" rows="10" placeholder="Descripcion"></textarea>
            </div>
            <button id="NuevoInvenatario" class="btn btn-primary">Añadir</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>