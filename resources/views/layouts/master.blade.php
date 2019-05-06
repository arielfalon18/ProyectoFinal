<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- link to fontawesome -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <title>The incidence</title>

    <!-- <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome/font.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/app.css">  
    <script src="/js/vue/vueD.js"></script>
    <script src="/js/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>    
  </head>
  <body >
    @include('partials.navbar')
    <div  id="appV" class="contenidoabajo">
    @yield('content')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/jquery/popper.min.js"></script>
    <!-- <script src="/assets/bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="/js/jquery/bootstrap.min.js"></script>
    <script src="/js/vueApp.js"></script> 
    <script src="/js/JqueryEfectos.js"></script>
  </body>
</html>