
<div class="modal fade" id="Mostrar_Incidencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <h1>Bienvenido esto son los datos de las incidencias </h1>

        <P>Descripcion: @{{MostrarInci.Descripcion}}</P>
        <p>Nombre Empleado: @{{MostrarInci.nombre}}</p>
        <!-- Mostramos la imagen que tenemos definida -->
        <img v-bind:src="cargarunaImagen(MostrarInci.Imagenes)"  alt="">
        
    </div>
  </div>
</div>