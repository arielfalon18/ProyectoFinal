<div class="modal fade bd-example-modal-lg" id="MostrarDetallesIncidencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-tecnico-detalles">
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
