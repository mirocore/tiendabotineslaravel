<?php
use App\Models\Producto;

/** @var Producto $productos */
?>
@extends('back.layout.adminmain')

@section('title')
    Búsqueda
@endsection


@section('main')

<h1 class="h3">Resultados de la búsqueda</h1>
<p><span class="text-light">{{count($productos)}} resultados encontrados para: </span>"{{$rdo}}"</p>
@if(count($productos) > 0)
@foreach($productos as $producto)
<div class="card mt-3">
   <div class="d-flex">
      <img src="{{url('img/botines/' . $producto->imagen)}}" alt="{{$producto->nombre}}" class="img-mini img-search">
       <div>
        <h2 class="h4 fond-weight-bold">{{$producto->nombre}}</h2>
        <p class="mb-1">Marca: {{$producto->marca->nombre}}</p>
        <p class="mb-1">Precio: {{$producto->precio}}</p>
        <a href="{{route('productos.ver', ['id' =>$producto->id_producto])}}" class="a-search  hoverPlus"> <i title="Ver más" class="fas fa-search mr-1"></i> Ver más</a>
       </div>
   </div>
</div>
@endforeach

@else
<div class="card">
    <p>No se ha encontrado ningún resultado que coincida con su búsqueda.</p>
</div>

@endif


@endsection