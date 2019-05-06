<!-- Aceder como un usuario de login -->
<div class="modal fade" id="InserUsuarioE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un departamento a la base de datos  -->
        <form  method="post" v-on:submit.prevent="loginUsuario">
        
        <div class="form-group">
            <label for="loginN">Email</label>
            <input type="text" class="form-control" v-model="loginN" id="loginN" name="loginN" placeholder="Introduce tu nombre">
        </div>
        <div class="form-group">
            <label for="passwordN">Passwird</label>
            <input type="text" class="form-control"  v-model="passwordN" name="passwordN" id="passwordN" placeholder="Introduce tu password">
        </div>
        <button id="AñadirEmpleado" class="btn btn-primary">Acceder Usuario</button>
        </form>
      </div>
    </div>
  </div>
</div>