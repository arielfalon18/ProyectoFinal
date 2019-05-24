<div class="modal fade" id="crearincidencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar incidencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para añadir un incidencia a la base de datos  -->
        <form method="post" v-on:submit.prevent="CreateInciencia" enctype="multipart/form-data">
        
        <div class="form-row" >
            <div class="form-group col-md-6">
                <label>Fecha incidencia</label>
                <input type="text" class="form-control" id="FechaI" name="FechaI" value="{{ old('scheduled_date',date('d-m-Y')) }}" readonly="readonly">
                <span v-if="errors.FechaI" class="text-danger">@{{errors.FechaI[0]}}</span>
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6" id="appV" >
                <select class="form-control" v-model="idDeparta" name="DepartamentoE" id="DepartamentoE" >
                    <option value="D" disabled selected>Selecciona departamento</option>
                    <option v-for="depart in DepartamentosT" v-if="depart.IdEmpresa=={{auth('usuarioL')->user()->Id_Empresa}}">@{{depart.Nombre}}</option>
                </select>
                <span v-if="errors.idDeparta" class="text-danger">@{{errors.idDeparta[0]}}</span>
            </div>
        </div>
        
        <div class="form-row" v-model="idEmpre={{auth('usuarioL')->user()->Id_Empresa}}">
            <div class="form-group" v-model="idEmple={{auth('usuarioL')->user()->Id_empleado}}" >
                <input type="file" name="Imagen" id="Imagen" >
            </div>
            <div class="form-group col-md-6" >
                <select class="form-control" v-model="Prioridad" name="Prioridad" id="Prioridad">
                <option value="E" disabled selected>Selecciona prioridad</option>
                    <option>Baja</option>
                    <option>Media</option>
                    <option>Alta</option>
                </select>
                <span v-if="errors.Prioridad" class="text-danger">@{{errors.Prioridad[0]}}</span>
            </div>
            
        </div>
        <div class="form-group">
            <textarea class="form-control"  v-model="Descripcion" name="Descripcion" id="Descripcion" cols="5" rows="5" placeholder="Descripcion"></textarea>
            <span v-if="errors.Descripcion" class="text-danger">@{{errors.Descripcion[0]}}</span>
        </div>
        <button id="AñadirIncidencia" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>
</div>