<div class="modal fade" id="AñadirUnaIncidencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asigna una incidencia a un Tecnico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">   
        <form>
            <div class="form-row">
                <div class="col">
                <select class="form-control" name="Tincidencia" id="Tincidencia" >
                    <option value="B" disabled selected>Seleciona el Tecnico</option>
                    <option v-for="emplea in empleadosNA" v-if="emplea.Rol=='Tecnico' && emplea.IdDepartamento==MostrarInci.IdDepartamento">@{{emplea.nombre}}</option>
                </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>