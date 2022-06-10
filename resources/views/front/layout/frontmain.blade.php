<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="<?= url('css/bootstrap.css');?>">
    
    <title>@yield("title") | El Rey del Botín</title>
    
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="stylesheet" href="<?=url("css/fontawesome/css/all.css");?>">
      <link rel="stylesheet" href="<?=url("css/estilos-front.css");?>">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900&display=swap" rel="stylesheet">      
</head>
<body>

<header id="top" class="navbar navbar-light bg-light fixed-top">

  
  <a class="navbar-brand frontLogo" href="{{route('Home')}}">
    El Rey del Botín
  </a>
  
  <a href="#" id="btn-menu" class="d-block d-lg-none">
     <span class="navbar-toggler-icon"></span>
  </a>
  
  <form class="my-2 my-lg-0 d-none d-lg-block" action="{{route('tienda.buscar')}}">
     @csrf
      <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar producto en la tienda" name="busqueda">
          <div class="input-group-prepend">
              <button class="btn btn-primary ">Buscar</button>
          </div>
      </div>
  </form>
  
  <ul id="links-nav" class="list-unstyled list-inline mb-0 d-none d-lg-block">
      <li class="list-inline-item"><a href="{{route('tienda.index')}}"><i class="fas fa-store mr-1"></i> Tienda</a></li>
      <li class="list-inline-item"><a href=""><i class="fas fa-shopping-cart mr-1"></i> Carrito</a></li>
  </ul>
  
  <ul id="navMobile" class="d-block d-lg-none list-unstyled">
      <li><a href="{{route('Home')}}">Inicio</a></li>
      <li><a href="{{route('tienda.index')}}">Tienda</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 1])}}">Adidas</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 2])}}">Nike</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 3])}}">Lotto</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 4])}}">Penalty</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 5])}}">Puma</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 6])}}">Topper</a></li>
      <li><a href="{{route('tienda.filtro', ['id' => 7])}}">Umbro</a></li>
  </ul>
  
</header>

<nav id="navegador" class="d-none d-lg-block">
   <div class="container">
       
    <ul class="list-unstyled mb-0">
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 1])}}">Adidas</a></li>
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 2])}}">Nike</a></li>
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 3])}}">Lotto</a></li>
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 4])}}">Penalty</a></li>
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 5])}}">Puma</a></li>
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 6])}}">Topper</a></li>
        <li class="list-inline-item"><a href="{{route('tienda.filtro', ['id' => 7])}}">Umbro</a></li>
    </ul>
    
   </div>
</nav>


<main  class="mt-3">
    <div class="container">
            @yield("main")
    </div>
</main>        

<footer id="piePagina">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1 class="h5 font-weight-bold mb-3">Sobre nosotros</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, consectetur? Laborum quasi ullam, aperiam aut tempora labore esse deserunt ut dolorum. Fugit eos, doloremque, in labore dolor amet asperiores voluptas.</p>
            </div>
            <div class="col-sm-3">
                <h1 class="h5 font-weight-bold mb-3">Navegación</h1>
                <ul class="list-unstyled">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Sobre Nosotros</a></li>
                    <li><a href="">Tienda</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h1 class="h5 font-weight-bold mb-3">Marcas</h1>
                <ul class="list-unstyled">
                    <li><a href="{{route('tienda.filtro', ['id' => 1])}}">Adidas</a></li>
                    <li><a href="{{route('tienda.filtro', ['id' => 2])}}">Nike</a></li>
                    <li><a href="{{route('tienda.filtro', ['id' => 3])}}">Lotto</a></li>
                    <li><a href="{{route('tienda.filtro', ['id' => 4])}}">Penalty</a></li>
                    <li><a href="{{route('tienda.filtro', ['id' => 5])}}">Puma</a></li>
                    <li><a href="{{route('tienda.filtro', ['id' => 6])}}">Topper</a></li>
                    <li><a href="{{route('tienda.filtro', ['id' => 7])}}">Umbro</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h1 class="h5 font-weight-bold mb-3">Contacto</h1>
                <ul class="list-unstyled">
                    <li><a href=""><i class="fas fa-map-marker-alt mr-3"></i> Calle Falsa 123 - Buenos Aires</a></li>
                    <li><a href=""><i class="fas fa-envelope mr-3"></i> elreydelbotin@gmail.com</a></li>
                    <li><a href=""><i class="fas fa-phone-alt mr-3"></i> 123456789 - Buenos Aires</a></li>
                    <li><a href=""><i class="far fa-clock mr-3"></i> Lunes a Viernes  10am - 8pm</a></li>
                </ul>
            </div>                        
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="text-center">Copyright - 2000 - 2018 www.elreydelbotin.com.ar, TODOS LOS DERECHOS RESERVADOS. </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?=url("js/jquery-3.2.1.min.js");?>"></script>
<script src="<?=url("js/bootstrap.js");?>"></script>
<script src="<?=url("js/main.js");?>"></script>
</body>
</html>
