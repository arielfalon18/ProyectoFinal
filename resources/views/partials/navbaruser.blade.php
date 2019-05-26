<!-- <header class="header">
  
  <input class="menu-btn" type="checkbox" id="menu-btn-user" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    
    <li class=li><a class="a">{{auth('usuarioL')->user()->email}}</a></li>
   
    
    <li class=li><a class="a">The Incidence</a></li>
    <li class=li> 
    <a class="a" href="logoutCA">CerrarSeccion</a></li>
    </li>
  </ul>
</header> -->
<!-- //De david -->
<!-- <header class="header">
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li class=li><a class="a">The Incidence</a></li>
    
    <button class="li a"  id="btnGroupDropMail" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <a class="a">{{auth('usuarioL')->user()->email}}</a>
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Editar</a>
      <a class="dropdown-item" href="logoutCA">Cerrar Seccion</a>
    </div>
  </ul> 
  

</header> -->

<!-- De ariel -->
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
        <h5 class="modal-title" id="exampleModalLabel">Datos de la incidencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container" v-for="emplead in empleadosNA" v-if="emplead.email==nuemeroDeusuario">
        <div class="row">
          <div class="col-6 text-center " >
            
            <div v-if="emplead.Foto=='null'">
                <img class="imagePerfil" src='/media/imagenesPerfil/ImagenPerfilN.jpg' alt="" />
            </div>
            <h3 class="nombreP">@{{emplead.nombre}}</h3>
            <p class="nombreP">@{{emplead.dni}}</p>
            <p class="nombreP">@{{emplead.telefono}}</p>
          </div>
          <div class="col-6" >
            <form v-on:submit.prevent="ActualizarPerfil"  method="POST">
                <div class="form-group">
                  <label for="inputAddress" v-model="idempleado=emplead.id">Nombre</label>
                  <input type="text" class="form-control" disabled id="NombrePerfil" v-bind:value="emplead.nombre">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Constraseña</label>
                  <input type="password" class="form-control" v-model="passwordNew" id="password" placeholder="Introduce tu nueva Contraseña">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Cambiar Foto de perfil</label>
                    <input type="file" class="form-control-file" id="fotoPerfil">
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary">Guardar Datos</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>