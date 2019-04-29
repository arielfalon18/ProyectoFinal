@extends('layouts.master')
@section('content')

<div class="content">
      
   <!--Hasta aqui solo el header -->
   <!-- Contenido que ofrecemos Aqui podemos enviar a cada ruta que queramos  -->
   <img class="ImagePortada" src="media/prueba/1.jpg" alt="" />
   <div class="text-centrado-home">
      <div class="text-center-main">The Incidence</div>
      <div class="text-center-secondary">Gestio de incidencias para empresas</div>
   </div>
   <section id="main-content">
         <article class="article1">
            <header>
               <h1>Informacion</h1>
            </header>
            <div class="container">
               <div class="row">
                  <div class="col-6">
                     <div class="div-img">
                        <img class="img-1" src="media/tickets.png" alt="">
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="div-text">
                        <p>En TheIncidence puedes hacer que el servicio y soporte al cliente a la hora de gestionar las incidencias sea mas facil y prodictivo</p>
                     </div>
                  </div>
               </div>
            </div>
            
         </article> 
         <article class="article2">
            <header>
               <h1>Servicio al cliente personalizado y simple</h1>
            </header>
            <div class="row">
               <div class="col-4">
               <div class="div-text">
                     <p>Hola</p>
                  </div>
               </div>
               <div class="col-8">
                     <img id="img-2 " src="media/help.png" alt="">
               </div>
            </div>
         </article>
   
   </section>
   <footer id="main-footer">
      <div class="row footer-row">
         <div class="col-4">
            <ul>
               <li>
                  <span class="footer.list">1</span>
                  <span class="footer.list">2</span>
                  <span class="footer.list">3</span>
                  <span class="footer.list">4</span>
               </li>
            </ul>
         </div>
         <div class="col-4">
            <ul>
               <li>
                  <span class="footer.list">1</span>
                  <span class="footer.list">2</span>
                  <span class="footer.list">3</span>
                  <span class="footer.list">4</span>
               </li>
            </ul>
         </div>
         <div class="col-4">
            <ul>
               <li>
                  <span class="footer.list">1</span>
                  <span class="footer.list">2</span>
                  <span class="footer.list">3</span>
                  <span class="footer.list">4</span>
               </li>
            </ul>
         </div>
      </div>
      
      <p id="footer-p" >Copyright &copy; 2019 <a href="#">No copiar</a></p>
   </footer> 
   
</div>

@stop