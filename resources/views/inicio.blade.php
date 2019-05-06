@extends('layouts.master')
@section('content')
<div class="preloader">
   <div class="cointainer-fluid">   
      <!--Hasta aqui solo el header -->
      <!-- Contenido que ofrecemos Aqui podemos enviar a cada ruta que queramos  -->
      <img class="ImagePortada" src="media/prueba/1.jpg" alt="" />
      <div class="text-centrado-home">
         <div class="text-center-main"><p> The Incidence</p></div>
         <p class="text-center-secondary">Gestio de incidencias para empresas</p>
      </div>
      <section id="main-content">
            <article class="article1">
               <header>
                  <h1 class="title-main">Informacion</h1>
               </header>
               <div class="container">
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
            </article>
      </section>
   </div>
</div>

@stop