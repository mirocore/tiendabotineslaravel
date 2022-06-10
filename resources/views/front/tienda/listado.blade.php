<?php
use App\Models\Producto;

/** @var Producto $productos */
?>

@extends('front.layout.frontmain')


@section('title')
Tienda
@endsection


@section('main')

    <div class="row mt-max mt-lg-5 mt-xl-5">
        <div class="col-sm-3">
           <div class="row tienda-filtro ">
               <div class="col">
                    <h1 class="h6 font-weight-bold mb-3">Marcas</h1>
                    <ul class="list-unstyled">
                    @foreach($marcas as $marca)
                        <li class="pl-2 mt-2"><a href="{{route('tienda.filtro', ['id' =>$marca->id_marca])}}">{{$marca->nombre}}</a></li>
                    @endforeach
                    </ul>  
               </div>
           </div>
        </div>
        <div class="col-sm-9">
           <div class="row">
               
            @foreach($productos as $producto)
            <div class="col-md-3 prodTienda">
              <a href="{{route('tienda.ver', ['id' =>$producto->id_producto])}}" class="productoTienda">
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
           <div class="row">
               <div class="col">
                           <div class="myPagination">    
                            {{$productos->links()}}
                            </div>
               </div>
           </div>
           
        </div>
    </div>

@endsection