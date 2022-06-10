<?php
use App\Models\Producto;

/** @var Producto $producto */
?>

@extends('front.layout.frontmain')


@section('title')
{{$producto->nombre}}
@endsection


@section('main')
    <div class="row mt-max mt-lg-5 mt-xl-5">
        <div class="col-md-6">
            <img src="{{url('img/botines/'. $producto->imagen)}}" alt="{{$producto->nombre}}" class="img-fluid mb-3">
        </div>
        <div class="col-md-6 tiendaVer">
            <h1 class="h2 font-weight-bold">{{$producto->nombre}}</h1>
            <p class="precio">$ {{$producto->precio}}</p>
            <p class="marca"><span>Marca: </span>{{$producto->marca->nombre}}</p>
            <p class="descripcion">{{$producto->descripcion}}</p>
            <div class="color">
                <h2 class="h4 mb-2">Colores: </h2>
                    @foreach($producto->colores as $color)
                     <p class="d-inline mr-3 mb-3 verColor"><i title="{{$color->nombre}}" class="fas fa-circle circulo{{$color->nombre}} mr-2"></i> {{$color->nombre}}</p>
                    @endforeach
            </div>
            <form action="">
                <div class="form-group">
                    <h2 class="h4 mb-2">Talles Disponibles</h2>
                    @foreach($producto->talles as $talle)
                        <div class="form-check form-check-inline checkTalles mb-2">
                          <input name="id_talle" class="form-check-input" type="radio" id="radio{{$talle->nombre}}" value="{{$talle->id_talle}}">
                          <label class="form-check-label talle" for="radio{{$talle->nombre}}">{{$talle->nombre}}</label>
                        </div>
                    @endforeach 
                </div>
                <div class="d-flex cantidad">
                    <input id="cantidad" type="text" value="0" class="inputCantidad mr-2" name="cantidad">
                    <ul class="aumentarRestar list-unstyled">
                        <li class="mb-1"><i id="sumar" class="fas fa-plus"></i></li>
                        <li><i id="restar" class="fas fa-minus"></i></li>
                    </ul>
                    <button class="btn" id="addCart">Agregar al Carrito</button>                    
                </div>

            </form>
        </div>
    </div>
@endsection