<header class="orden">
  <nav>
    <ul class="ClasseUl">
      <li><a id="datosId">{{auth('usuarioL')->user()->email}}<i class="fa fa-sort-desc"></i></a>
        <ul class="ClasseUl">
              <li><a data-toggle="modal" v-on:click.prevent="modificarPerfil()">Editar Perfil</a></li>
              <li><a href="logoutCA">Cerrar Seccion</a></li>
        </ul>
      </li>
      <li><a >The Incidence</a></li>
      
    </ul>
  </nav>
</header>

<div class="modal fade bd-example-modal-xl" id="ModificarPerfil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-tecnico-detalles">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container" v-for="emplead in empleadosNA" v-if="emplead.email==nuemeroDeusuario">
        <div class="row">
          <div class="col-6 text-center " >
            
            <div v-if="emplead.Foto=='null'">
                <img class="imagePerfil" id="imagePerfil" name="fotoPerfils" src='/media/imagenesPerfil/ImagenPerfilN.jpg' alt="" />
            </div>
            <div v-else>
                <img class="imagePerfil" id="imagePerfil" name="fotoPerfils" :src="'/media/imagenesPerfil/'+emplead.Foto" alt="" />
            </div>
            <div class="image-upload">  
                <label for="file-input"><i for="exampleFormControlFile1" class="fas fa-camera"></i></label>
                <input id="file-input" type="file" v-on:change="datosFicheroPerfil"/> 
            </div> 
            <h3 class="nombreP">Nombre : @{{emplead.nombre}}</h3>
            <p class="nombreP"> DNI : @{{emplead.dni}}</p>
            <p class="nombreP"> Tlf : @{{emplead.telefono}}</p> 
          </div>
          <div class="col-6" >
            <form v-on:submit.prevent="ActualizarPerfil"  method="POST">
                <div class="form-group">
                  <label for="inputAddress" v-model="idempleado=emplead.id">Nombre</label>
                  <input type="text" class="form-control" disabled id="NombrePerfil" v-bind:value="emplead.nombre">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Constraseña</label>
                  <input type="password" class="form-control" v-model="passwordNew" id="passwordPerfil" placeholder="Introduce tu nueva Contraseña">
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary boton-foto" disabled id="GuardarPerfil">Guardar Informacion</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>