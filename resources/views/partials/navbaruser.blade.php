<header id="main-header">
    <!-- Navgador de la derecha lo podemos poner en el centro o dejarlo ahy  -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link nombreUser">Nombre Usuario <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link empresa">TITULO EMPRESA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link cerrarSesion" href="/inicio">Cerrar sesion</a>
        </li>
      </ul>
    </div>
  </nav>
</header>



<!-- <script>
const nav = document.querySelector('#main-header');
const navTop = nav.offsetTop;
function stickyNavigation() {
  if (window.scrollY >= 665) {
    document.body.classList.add('fixed-nav');
  } else {
    document.body.classList.remove('fixed-nav');
  }
}
window.addEventListener('scroll', stickyNavigation);

</script> -->
