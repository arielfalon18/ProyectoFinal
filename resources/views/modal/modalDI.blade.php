
<div class="modal fade" id="Mostrar_Incidencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-content2 ">
      <div class="container containerInfo">
      <h1 id="texto-info1 ">Datos de la incidencia</h1>
        <div class="row">
          <div class="col-md-6">   
            <p class="menu-title"><b> Datos Empleado</b></p>       
            <p id="texto-info">Empleado: @{{MostrarInci.nombre}}</p>
            <p id="texto-info">Correo: @{{MostrarInci.email}}</p>
            <p id="texto-info">Telefono: @{{MostrarInci.telefono}}</p>
            <P id="texto-info">Descripcion: @{{MostrarInci.Descripcion}}</P>
          </div>
          <div class="col-md-6">
          <p class="menu-title"><b> Datos Incidencia</b></p>       

            <p id="texto-info">ID Incidencia: @{{MostrarInci.id}}</p>
            <p id="texto-info">Fecha Entrada : @{{MostrarInci.FechaEntrada}}</p>      
            <p id="texto-info">Estado: @{{MostrarInci.estado}}</p>      
            <p id="texto-info">Prioridad: @{{MostrarInci.prioridad}}</p>      
          </div>
        </div>  
      <div class="div-infor-general">

          <div class="div-linea"> </div>
          
          
          </div>    
          <P class="titulo-img-texto">
            Imagen  
          </P>
          <div v-if="MostrarInci.Imagenes=='NULL'">
              <h1>No hay imagen</h1>
          </div>
          <div v-else class="Info-Img-Div"> 
            <img class="img-info" :src="'/media/ImagenesDeIncidencia/'+MostrarInci.Imagenes"  alt=""> 
          </div>
        
      </div>
    </div>
  </div>
</div>