<div class="fakeloader">
 
<!-- <img srcre="media/prueba/1.jpg" alt=""> -->
</div>   
@extends('layouts.master')
@section('content')

<div class="cointainer">   
   <!--Hasta aqui solo el header -->
   <!-- Contenido que ofrecemos Aqui podemos enviar a cada ruta que queramos  -->
   <div class="bd-example">
   <!-- <?php
// sleep(5);
?> -->
      <div id="carouselExampleCaptions" class="carousel slide ImagePortada" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="media/prueba/1.jpg" class="d-block w-100 h-100" alt="">
            </div>
            <div class="carousel-item">
               <img src="media/prueba/3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="media/prueba/4.jpg" class="d-block w-100 h-100" alt="...">
            </div>
               <div class="carousel-item">
               <img src="media/prueba/bg.jpg" class="d-block w-100 h-100" alt="...">
            </div>
         </div>   
      </div>
   </div>
   <!-- <img class="ImagePortada" src="media/prueba/2.jpg" alt="" /> -->
   <div class="text-centrado-home">
      <div class="text-center-main "><p class="fadeInUp"> The Incidence</p></div>
      <!-- <p class="text-center-secondary">Gestio de incidencias para empresas</p> -->
   </div>
   <section id="main-content">
         <article class="article1">
            
               <h1 class="title-main">Informacion</h1>
            
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 mt-md-0 mt-3">
                     <div class="div-img">
                        <img class="img-1 bounceInUp" src="media/tickets.png" alt="">
                     </div>
                  </div>
                  <div class="col-md-6 mt-md-0 mt-3">
                     <p class="text1">En TheIncidence puedes hacer que el servicio y soporte al cliente a la hora de gestionar las incidencias sea mas facil y productivo</p>
                  </div>
               </div>
            </div>
            
         </article> 
         <article class="article2">
            
               <h1 >Servicio al cliente personalizado y simple</h1>
            
            <div class="container">
               <div class="row">
                  <div class="col-md-6 mt-md-0 mt-3">
                     <p class="text2">Ofrecemos un gestor de incidencias adaptable para cualquier empresa que lo desee.</p>
                  </div>
                  <div class="col-md-6 col6 mt-md-0 mt-3">
                     <div class="div-img2">
                        <img class="img-2 " data-aos="fade-up" src="media/help.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </article>
         <article class="article3">
         
         <h1 class="text-title-h1">¿Sabias Que?</h1>
         <div class="container">
               <div class="row">
                  <div class="col-md-12  mt-md-0 mt-3">
                     <div class="text2">
                        <p class="artc3-text">Un sistema de tickets (sistema de tickets de soporte) puede recopila todas las solicitudes de asistencia al cliente.</p>
                     </div>
                     <p class="artc3-text">Un sistema de tickets de soporte también permite la recopilación de datos que pueden utilizarse para mejorar el equipo de soporte de una empresa en su conjunto. La razón de esto es que un sistema de tickets de soporte permite un sistema de seguimiento de problemas, que da visibilidad al panorama general de un equipo de soporte</p>
                  </div>
               </div>
            </div>
         <div class="div-img2">
         </div>
         </article>
         <article class="article4">
         <h1 class="text-title-h1">Ha llegado la hora</h1>
         <div class="container">
               <div class="row">
                  <div class="col-md-12  mt-md-0 mt-3">
                     <div class="text2">
                        <!-- <p class="artc3-text">Cualquier empresa que no utilice un sistema de tickets de soporte debe comenzar a hacerlo de inmediato. Hasta que eso suceda:</p> -->
                     </div>
                     <p class="artc3-text">Las mejores prácticas de actualización de la base de conocimientos y la mejora continua del servicio después de la resolución de los tickets garantizan:</p>
                  </div>
               </div>
               <div class="row ">
                  <div class="col-4 artic4-div-texto">Mejora de la percepción empresarial de las TI y sus servicios</p></div>
                  <div class="col-4 artic4-div-texto">Ahorrando tiempo y recursos, y mejorando la eficiencia general del negocio</div>
                  <div class="col-4 artic4-div-texto">Satisfacción del usuario final con la calidad de los servicios informáticos.</div>
               </div>
            </div>
         </article>
         <article class="article5">
         
         
         <div class="container">
            <p class="artc5-text">Registro de problemas y seguimiento del progreso</p>
            
         </div>
         </article>
   </section>
</div>



<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
      <div class="row">
         <div class="col-md-4 mt-md-0 mt-3">
         <a id="logo-header-footer" href="/inicio"><img id="main-header-logo-footer" src="media/logo/logo-transparent.png"></a>
         </div>
         <div class="col-md-4 mb-md-0 mb-3 footerdiv2">

            <div class="footer-div1">
               <p class="footer-text-div2">Contacto</p>
               <div>
               <a href="/Contactos">Contacto Empresa</a>
               </div>
               <div>
               <a href="/registrarse">Login Empresa</a>
               </div>
               <div>
               <a href="/InciarEmpleado">Login Empleado</a>
               </div>
            </div>
            <div class="footer-div2">
               <p class="footer-text-div2">Nosotros</p>
               <a href="/Nosotros">David</a>
               <a href="/Nosotros">Ariel</a>
               <a href="/Nosotros">Zafar</a>
            </div>
            <ul>
            <li class="llista">
                     <i class="fas fa-at"></i>
                     <i class="fab fa-google-plus-g"></i>
                     <i class="fab fa-linkedin-in"></i>
                     <i class="fab fa-twitter"></i>          
                  </li>
            </ul>
            
            <!-- <i class="far fa-copyright cr-logo"></i> -->
            <!-- <ul>
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
               </div> -->
            </ul>
         </div>
         <div class="col-md-4 mb-md-0 mb-3 footerdiv2">
            <div id="info">
               <p class="TipoA"><strong class="tipoL">Llamanos:</strong> 666 666 666</p>
               <p class="TipoA"><strong class="tipoL">Localízanos:</strong></p>
               <p class="TipoA">Carrer de la Selva de Mar, 211, 08020 Barcelona : <a href="https://www.google.com/maps/dir//Carrer+de+la+Selva+de+Mar,+211,+08020+Barcelona/@41.415937,2.1969793,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x12a4a3340875c049:0x308883c45cf4e2f5!2m2!1d2.199168!2d41.415933!3e0" target="_blank">Como LLegar?</a></p>
               <p class="TipoA">Theincidence@incidence.org</p>
            </div>
         </div>
      </div>
   </div> 
   <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="/inicio"> Theincidence.com</a>
   </div>
</footer>

@stop