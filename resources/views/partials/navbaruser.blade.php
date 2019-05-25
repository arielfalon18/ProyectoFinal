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
    <div>
          <i class="fa fa-bars"></i>
    </div>
    <ul class="ClasseUl">
      <li><a>{{auth('usuarioL')->user()->email}}<i class="fa fa-sort-desc"></i></a>
        <ul class="ClasseUl">
              <li><a >Editar</a></li>
              <li><a href="logoutCA">Cerrar Seccion</a></li>
        </ul>
      </li>
      <li><a >The Incidence</a></li>
      
    </ul>
  </nav>
</header>
<!-- https://codepen.io/samanthablackes/pen/weKRLV -->
