<div class="modal fade bd-example-modal-lg" id="MostrarDetallesIncidencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <h1>Detalles del Usuario</h1>
      <div class="container">
        <div class="row">

          <div class="col-6">
            <p>Nombre: @{{DatosPerTecnico.nombreCreador}}</p>
            <p>Dni: @{{DatosPerTecnico.dni}}</p>
            <p>Telefono: @{{DatosPerTecnico.telefono}}</p>
            <p>Departamento: @{{DatosPerTecnico.nombreDepartamento}}</p>
          </div>
          <div class="col-6">
            <p>@{{DatosPerTecnico.Descripcion}}</p>
            <p>@{{DatosPerTecnico.FechaEntrada}}</p>
            <p>@{{DatosPerTecnico.Prioridad}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>