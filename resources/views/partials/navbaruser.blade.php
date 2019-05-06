
<header class="header">
  <!-- <a href="" class="logo"> <a id="logo-header" href="inicio"><img id="main-header-logo" src="media/logo/logo-transparent.png" alt=""></a></a> -->
  <input class="menu-btn" type="checkbox" id="menu-btn-user" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <!-- <li class=li><a class="a" href="/inicio">Inicio</a></li>
    <li class=li><a class="a" href="/Nosotros">Acerca</a></li> -->
    
    <form method="POST" action="{{ route('logout')}}">
    {{ csrf_field()}}
    <li class=li><a class="a">Nombre usuario</a></li>
    <li class=li><a class="a">The Incidence</a></li>
    <li class=li><a class="a" href="/inicio">Cerrar sesion</a></li>
    </form>
  </ul>
</header>

