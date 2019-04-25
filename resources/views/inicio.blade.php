@extends('layouts.master')
@section('content')

<div>
      
   <!--Hasta aqui solo el header -->
   <!-- Contenido que ofrecemos Aqui podemos enviar a cada ruta que queramos  -->
   <img class="ImagePortada" src="media/prueba/1.jpg" alt="" />
   <section id="main-content">
         <article>
            <header>
               <h1>Informacion</h1>
            </header>
            <div class="container">
               <div class="row">
                  <div class="col-6">
                     <div class="div-img"></div>
                  </div>
                  <div class="col-6">a</div>
               </div>
               <div class="row">
                  <div class="col-6">a</div>
                  <div class="col-6">a</div>
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