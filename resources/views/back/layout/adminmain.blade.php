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
      <link rel="stylesheet" href="<?=url("css/estilos-back.css");?>">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900&display=swap" rel="stylesheet">      
</head>
<body>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
  <a class="navbar-brand font-italic font-weight-bold adminLogo" href="#">El Rey del Botín</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
   
@if(Auth::check())   
    <ul class="navbar-nav ml-auto">
    <li class="nav-item mr-4" id="nav-buscar">
        <form action="{{route('productos.buscar')}}" class="mt-3 mt-lg-0">
          @csrf
           <div class="input-group">
            <input name="busqueda" type="text" class="form-control myInput" placeholder="Buscar Producto...">
            <div class="input-group-prepend">
            <button class="btn btn-primary  myBtnGray"><i class="fas fa-search  hoverPlus"></i></button>
            </div>
           </div>
        </form>
    </li>
     <li class="nav-item"><a class="nav-link" href="<?=route("admin.index")?>">Inicio</a></li>
     <li class="nav-item"><a class="nav-link" href="<?=route("productos.index")?>">Productos</a></li>
     <li class="nav-item"><a class="nav-link" href="<?=route("usuarios.index")?>">Usuarios</a></li>
      <li class="nav-item dropdown ml-lg-5">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user mr-2"></i> {{ Auth::user()->nombre . " " . Auth::user()->apellido }}</a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="{{route('usuarios.ver', ['id' =>Auth::user()->id_usuario])}}">Mi cuenta</a>
          <a class="dropdown-item" href="<?= route('auth.logout');?>">Cerrar Sesión</a>
        </div>
      </li>
    </ul>
@endif    
  </div>
</nav>
<!--/.Navbar -->

<main id="mainCon" class="mt-3">
    <div class="container">
            @yield("main")
    </div>
</main>        

<footer class="admin-footer fixed-bottom pb-3 pt-3">
   <div class="container">
       <div class="row">
           <div class="col">
                <p class="text-center my-0 py-0">Ramiro Facundo Belcore</p>
           </div>
       </div>
   </div>
</footer>

<script src="<?=url("js/jquery-3.2.1.min.js");?>"></script>
<script src="<?=url("js/bootstrap.js");?>"></script>
<script src="<?=url("js/bootstrap.bundle.min.js");?>"></script>
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })    
</script>
</body>
</html>
