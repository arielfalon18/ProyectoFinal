<div class="modal fade" id="AñadirUnaIncidencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignamos un Tutor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un departamento a la base de datos  -->
        <form  method="post" v-on:submit.prevent="incidenciaTecnica">
          <div class="form-group" v-model="IDepartamento=MostrarInci.IdDepartamento">
                <select class="form-control" v-model="ITecnico" name="Tincidencia" id="Tincidencia">
                    <option value="F" v-model="IIncidencia=MostrarInci.id" disabled selected>Seleciona el Tecnico</option>
                    <option v-for="emplea in mostrarTecnicoIm" v-if="emplea.Rol=='Tecnico' && emplea.IdDepartamento==MostrarInci.IdDepartamento">@{{emplea.nombre}}(@{{emplea.Contador}})</option>
                </select>
          </div>
        <button id="incidenciaTecnica" class="btn btn-primary">Asignar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>