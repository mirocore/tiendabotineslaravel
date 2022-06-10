<?php
use App\Models\Producto;
?>

@extends('front.layout.frontmain')


@section('title')
Bienvenidos
@endsection


@section('main')
  
  
   <div class="d-block d-lg-none" id="buscadorMobile">
         <form class="mb-4" action="{{route('tienda.buscar')}}">
             @csrf
              <div class="input-group">
                  <input type="text" class="form-control mb-1" placeholder="Buscar producto en la tienda" name="busqueda">
                      <button class="btn btn-block btn-primary ">Buscar</button>
              </div>
          </form>
   </div>
   
   
   <div>
      
    <div class="row mt-5">
        <div class="col">
           <h1 class="h3 mb-4">Lanzamientos más recientes</h1>    
        </div>
    </div>  
      
    <div class="row">
        @foreach($recientes as $producto)
        <div class="col-md-3 mb-3">
          <a href="{{route('tienda.ver', ['id' =>$producto->id_producto])}}" class="productoHome">
           <figure mb-2>
               <img src="{{url('img/botines/' . $producto->imagen)}}" alt="{{$producto->nombre}}" class="img-fluid">
               <div class="verMas"><i class="fas fa-search"></i></div>
           </figure>
             <h2 class="h6">{{$producto->nombre}}</h2>
            <p class="precio">$ {{$producto->precio}}</p>
          </a>
        </div>
        @endforeach      
    </div>   
   
   <div class="row mt-5">
       <div class="col">
           <h1 class="h3 mb-4">Lo nuevo de Umbro</h1>
       </div>
   </div>
   
    <div class="row">
        @foreach($umbro as $producto)
        <div class="col-md-4 mb-3">
          <a href="{{route('tienda.ver', ['id' =>$producto->id_producto])}}" class="productoHome">
           <figure mb-2>
               <img src="{{url('img/botines/' . $producto->imagen)}}" alt="{{$producto->nombre}}" class="img-fluid">
               <div class="verMas"><i class="fas fa-search"></i></div>
           </figure>
             <h2 class="h5">{{$producto->nombre}}</h2>
            <p class="precio">$ {{$producto->precio}}</p>
          </a>
        </div>
        @endforeach      
    </div>    
   
   
   </div>
@endsection