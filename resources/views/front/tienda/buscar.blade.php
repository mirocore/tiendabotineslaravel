<?php
use App\Models\Producto;

/** @var Producto $productos */
?>


@extends('front.layout.frontmain')

@section('title')
    Búsqueda
@endsection


@section('main')

<h1 class="h3 font-weight-bold mt-max mt-lg-5 mt-xl-5">Resultados de la búsqueda</h1>
<p><span >{{count($productos)}} resultados encontrados para: </span>"{{$rdo}}"</p>
@if(count($productos) > 0)
@foreach($productos as $producto)
<div class="card mt-3">
   <div class="d-flex resultado">
      <img src="{{url('img/botines/' . $producto->imagen)}}" alt="{{$producto->nombre}}" class="img-mini img-search mr-3">
       <div>
        <h2 class="h4 font-weight-bold mt-3">{{$producto->nombre}}</h2>
        <p class="mb-1">Marca: {{$producto->marca->nombre}}</p>
        <p class="mb-1">Precio: {{$producto->precio}}</p>
        <a href="{{route('tienda.ver', ['id' =>$producto->id_producto])}}" class="a-search  hoverPlus"> <i title="Ver más" class="fas fa-search mr-1"></i> Ver más</a>
       </div>
   </div>
</div>
@endforeach

@else
<div class="card px-3 py-3">
    <p class="mb-0">No se ha encontrado ningún resultado que coincida con su búsqueda.</p>
</div>

@endif


@endsection