<?php
use App\Models\Producto;


/** @var Producto $productos */
?>


@extends('back.layout.adminmain')

@section('title')
    Listado de productos
@endsection

@section('main')
 
<div class="row ">
    <div class="col">
        <h1 class="h3 mb-4 d-inline-block mr-4">Listado de Productos</h1>
    </div>
</div>
  
 <div class="row ">
    <div class="col">
        <a href="{{route('productos.form-nuevo')}}" class="rounded bg-success text-light d-inline-block py-2 px-2 mb-3"><i class="rounded fas fa-plus-circle mr-3 "></i> Añadir Producto</a>
    </div>
</div> 
  
 <div class="row mb-3">
    <div class="col">
          @if(Session::has('success'))
              <div class="msj msj-ok">
                  <p>{{Session::get('success')}}</p>
              </div>
          @endif
    </div>
</div> 
  
 <div class="row ">
    <div class="col">
  
   <div class="card mb-5">
        
        <div class="table-responsive">
        <table class="table table-bordered myTable ">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Colores</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $prod)
                    <tr>
                        <td>{{$prod->nombre}}</td>
                        <td class="text-center">$ {{$prod->precio}}</td>
                        <td class="text-center"> {{$prod->marca->nombre}}</td>
                        <td class="text-center">
                           @if(count($prod->colores) != 0)
                                @foreach($prod->colores as $color)
                                    <i title="{{$color->nombre}}" class="fas fa-circle circulo{{$color->nombre}}"data-toggle="tooltip" data-placement="top" ></i>
                                @endforeach
                           @else
                               Sin color
                           @endif
                           
                        </td>
                        <td class="text-center">
                            <!--VER DETALLES-->
                            <a href="{{route('productos.ver', ['id' =>$prod->id_producto])}}" data-toggle="tooltip" data-placement="top" title="Ver más"> <i class="fas fa-search mr-2 hoverPlus"></i></a>     
                            
                            <!--BORRAR-->
                            <form action="{{route('productos.borrar', ['id' => $prod->id_producto])}}"  method="post" class="d-inline">
                               @csrf
                               @method('DELETE')
                                <button onclick="return confirm('¿Está seguro que desea borrar el producto {{$prod->nombre}}?');"  class="btn btn-link mx-0 my-0 px-0 py-0 sinBtn" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                    <i title="Borrar" class="fas fa-trash-alt mr-2 hoverPlus"></i></button>
                            </form>
                           
                           
                            <!--EDITAR-->
                            <a href="{{route('productos.form-editar', ['id' =>$prod->id_producto])}}" data-toggle="tooltip" data-placement="top" title="Editar producto"> <i title="Editar" class="fas fa-edit hoverPlus"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            
        </div>
        <div class="myPagination">    
            {{$productos->links()}}
        </div>
    </div>
</div>         
   </div>
   
@endsection