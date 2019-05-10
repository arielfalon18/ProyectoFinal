<div class="fakeloader"></div>   
@extends('layouts.master')
@section('content')
<div class="preloader">
   <div class="cointainer">   
      <!--Hasta aqui solo el header -->
      <!-- Contenido que ofrecemos Aqui podemos enviar a cada ruta que queramos  -->
      <img class="ImagePortada" src="media/prueba/2.jpg" alt="" />
      <div class="text-centrado-home">
         <div class="text-center-main "><p class="fadeInUp"> The Incidence</p></div>
         <p class="text-center-secondary">Gestio de incidencias para empresas</p>
      </div>
      <section id="main-content">
            <article class="article1">
               <header>
                  <h1 class="title-main">Informacion</h1>
               </header>
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-6 mt-md-0 mt-3">
                        <div class="div-img">
                           <img class="img-1" src="media/tickets.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-6 mt-md-0 mt-3">
                        <p class="text1">En TheIncidence puedes hacer que el servicio y soporte al cliente a la hora de gestionar las incidencias sea mas facil y productivo</p>
                     </div>
                  </div>
               </div>
               
            </article> 
            <article class="article2">
               <header>
                  <h1>Servicio al cliente personalizado y simple</h1>
               </header>
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 mt-md-0 mt-3">
                        <p class="text2">Ofrecemos un gestor de incidencias adaptable para cualquier empresa que lo desee.</p>
                     </div>
                     <div class="col-md-6 col6 mt-md-0 mt-3">
                        <div class="div-img2">
                           <img class="img-2 " src="media/help.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </article>
            <article class="article3">
            <header>
            <h1>A que nos dedicamos?</h1></header>
            <div class="div-img2">
               <img class="img-3 " src="media/Incidencia.png" alt="">
            </div>
            </article>
      </section>
   </div>
</div>


<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
      <div class="row">
         <div class="col-md-4 mt-md-0 mt-3">
         <a id="logo-header-footer" href="/inicio"><img id="main-header-logo-footer" src="media/logo/logo-transparent.png"></a>
         </div>
         <div class="col-md-4 mb-md-0 mb-3 footerdiv2">
            <!-- <i class="far fa-copyright cr-logo"></i> -->
            <ul>
               <div class="list list1">
               <li class="llista"><a href="inicio">Inicio</a></li>
                  <li class="llista"><a href="/Contactos">Contactos</a></li>
                  <li class="llista"><a href="/Nosotros">Acerca de nosotros</a></li>
                  <li class="llista">
                     <i class="fas fa-at"></i>
                     <i class="fab fa-google-plus-g"></i>
                     <i class="fab fa-linkedin-in"></i>
                     <i class="fab fa-twitter"></i>          
                  </li>
               </div>
            </ul>
         </div>
         <div class="col-md-4 mb-md-0 mb-3 footerdiv2">
            <div id="info">
               <p><strong class="tipoL">Llamanos:</strong> 666 666 666</p>
               <p><strong class="tipoL">Localízanos:</strong></p>
               <p>Carrer de la Selva de Mar, 211, 08020 Barcelona : <a href="https://www.google.com/maps/dir//Carrer+de+la+Selva+de+Mar,+211,+08020+Barcelona/@41.415937,2.1969793,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x12a4a3340875c049:0x308883c45cf4e2f5!2m2!1d2.199168!2d41.415933!3e0" target="_blank">Como LLegar?</a></p>
               <p>Theincidence@incidence.org</p>
            </div>
         </div>
      </div>
   </div> 
   <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="/inicio"> Theincidence.com</a>
   </div>
</footer>

@stop