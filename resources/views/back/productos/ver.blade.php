<?php
use Illuminate\Support\Facades\Storage;
use App\Models\Producto;

/** @var Producto $producto */
?>

@extends('back.layout.adminmain')

@section('title')
    {{$producto->nombre}}
@endsection


@section('main')
<div class="row">
   <div class="col">
        <div class="d-block">
            <a href="{{route('productos.index')}}" class="bg-primary text-light py-2 px-2 rounded"><i class="fas fa-arrow-left"></i></i> Volver al listado</a>
        </div>
   </div>
</div>
  
<div class="row">
    <div class="col">
        
   <div class="card mt-3">
   <div class="row">
       <div class="col-sm-4 mb-3">
          @if($producto->imagen == '')
           <img src="{{url('img/sinimagen.jpg')}}" alt="Sin imagen disponible" class="img-fluid">
           @else
           <img src="{{url('img/botines/'. $producto->imagen)}}" alt="{{$producto->nombre}}" class="img-fluid">
          @endif
       </div>
       <div class="col-sm-8">
            <h1 class="h2">{{$producto->nombre}} - <small class="textoGris">{{$producto->marca->nombre}}</small></h1>
            <div class="ml-1 mt-4">
            @if($producto->descripcion)
                <h2 class="h4">Descripción:</h2>
                <p>{{$producto->descripcion}}</p>
            @endif
            <h2 class="h4">Precio:</h2>       
            <p>$ {{$producto->precio}}</p>
            @if(count($producto->colores) != 0)
                <h2 class="h4 mb-2">Colores: </h2>
                @foreach($producto->colores as $color)
                 <p class="d-inline mr-3 mb-3"><i title="{{$color->nombre}}" class="fas fa-circle circulo{{$color->nombre}} mr-2"></i> {{$color->nombre}}</p>
                @endforeach
            @endif
            @if(count($producto->talles) != 0)
                <h2 class="h4 mb-3 mt-3">Talles:</h2>
                @foreach($producto->talles as $talle)
                    <div class="form-check form-check-inline checkTalles mb-2">
                      <input name="id_talle[]" class="form-check-input" type="checkbox" id="check{{$talle->nombre}}" value="{{$talle->id_talle}}">
                      <label class="form-check-label talle" for="check{{$talle->nombre}}">{{$talle->nombre}}</label>
                    </div>
                @endforeach            
            @endif
            </div>
        </div>
       </div>
       </div>   
       <div class="row mt-2">    
           <div class="col">
               <a href="{{route('productos.form-editar', ['id' =>$producto->id_producto])}}" class="btn btn-block btn-primary">Editar Producto</a>
           </div>
       </div>
   </div>
   </div>
    </div>
</div>  
@endsection
