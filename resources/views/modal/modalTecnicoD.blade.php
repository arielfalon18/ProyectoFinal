<!-- Mostrar  los detalles de la incidencia seleccionada -->
<div class="modal fade bd-example-modal-lg" id="MostrarDetallesIncidencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-tecnico-detalles">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de la incidencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
      <h1>Detalles del Usuario</h1>
        <div class="row">

          <div class="col-6">
            <p class="txt-detal">Nombre: @{{DatosPerTecnico.nombreCreador}}</p>
            <p class="txt-detal">Dni: @{{DatosPerTecnico.dni}}</p>
            <p class="txt-detal">Telefono: @{{DatosPerTecnico.telefono}}</p>
            <p class="txt-detal">Departamento: @{{DatosPerTecnico.nombreDepartamento}}</p>
          </div>
          <div class="col-6">
            <p class="txt-detal">Fecha: @{{DatosPerTecnico.FechaEntrada}}</p>
            <p class="txt-detal">Prioridad: @{{DatosPerTecnico.Prioridad}}</p>
            <p class="txt-detal">Descripcion: @{{DatosPerTecnico.Descripcion}}</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Dar un resultado a la base de datos -->
<div class="modal fade bd-example-modal-lg" id="DarResultadoT" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-tecnico-detalles">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dar Respuesta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <form method="POST" class="pb-4"  v-on:submit.prevent="DarResultadoIncidencia" >
        <div class="form-group">
          <select  class="form-control" v-model="Respuesta" name="TipoEstado" id="TipoEstado" >
                <option value="G" disabled selected>Seleccionar motivo</option>
                <option >Cancelada</option>
                <option >Finalizada</option>
          </select>
          <span v-if="errors.Respuesta" class="alert-danger">@{{errors.Respuesta[0]}}</span>
        </div>
          <div class="form-group" v-model="Id_incidencia=DatosPerTecnico.idIncidencia">
            <label  for="exampleFormControlTextarea1">Descripcion de la incidencia</label>
            <textarea class="form-control" v-model="DescripcionRespuesta" id="DescripcionRespuesta" name="DescripcionRespuesta" rows="3"></textarea>
            <span v-if="errors.DescripcionRespuesta" class="alert-danger">@{{errors.DescripcionRespuesta[0]}}</span>
          </div>
          <div class="form-check" v-model="IdTecnico=DatosPerTecnico.IdTecnico">
            <input class="form-check-input" type="checkbox" value="" id="aceptarIn" v-model="aceptarIncidencia">
            <label class="form-check-label" for="defaultCheck1">
              Ya no podras resolver
            </label>
            <span v-if="errors.aceptarIncidencia" class="alert-danger">@{{errors.aceptarIncidencia[0]}}</span>
            <!-- <h1>@{{DatosPerTecnico.IdTecnico}}</h1> -->
          </div>
          <button type="submit" class="btn btn-outline-primary ">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Incidencia resulta y dar una brebe descripcion de que tuvo que hacer  -->