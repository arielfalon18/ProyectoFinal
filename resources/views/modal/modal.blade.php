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
        <form  method="post"   v-on:submit.prevent="nuevoEmpreados">
        <div class="form-row" v-model="id={{auth()->user()->id}}">
            <div class="form-group col-md-7">
            <!-- v-model="nombre" -->
                <input type="text" class="form-control" id="nombreT"  v-model="nombreT" name="nombreT" placeholder="Introduce su nombre">
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="dniT" v-model="dniT"   name="dniT" placeholder="DNI">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="emailT" v-model="emailT"  id="emailT" placeholder="Introduce el email">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="telefonoT" v-model="telefonoT"  name="telefonoT" placeholder="Telefono">
            </div>
            <div class="form-group col-md-6">
            <select class="form-control" name="TipoEmpleado" id="TipoEmpleado" >
                <option>Tecnico</option>
                <option>Usuario</option>
            </select>
            </div>
            <span v-for="error in errors" class="text-danger">@{{error}}</span>
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
        <form  method="post">
        
        <div class="form-group">
            <input type="text" class="form-control" id="nombreD" name="nombreD" placeholder="Departamento">
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text" class="form-control" name="Edificio" id="Edificio" placeholder="Edificio">
            </div>
            <div class="form-group col-md-5">
                <input type="number" class="form-control" id="plantaD" name="plantaD" placeholder="Planta">
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
        <form  method="post">
        
        <div class="form-group">
            <input type="text" class="form-control" id="nombreI" name="nombreI" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="tipoI" id="tipoI" placeholder="Tipo">
        </div>
        <div class="form-group">
                <textarea class="form-control" name="DescripcionI" id="DescripcionI" cols="30" rows="10" placeholder="Descripcion"></textarea>
            </div>
            <button id="AñadirEmpleado" class="btn btn-primary">Añadir</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>