<?php
use App\Models\Marca;
use App\Models\Talle;
use App\Models\Color;
use Illuminate\Support\ViewErrorBag;


/** @var ViewErrorBag $errors */
/** @var Marca|\Illuminate\Database\Eloquent\Collection $marcas */
/** @var Color|\Illuminate\Database\Eloquent\Collection $colores */
/** @var Talle|\Illuminate\Database\Eloquent\Collection $talles */
?>


@extends('back.layout.adminmain')

@section('title')
Añadir Producto
@endsection


@section('main')

<div class="d-block">
<a href="{{route('productos.index')}}" class="bg-primary text-light py-2 px-2 rounded"><i class="fas fa-arrow-left"></i></i> Volver al listado</a>
</div>

<h1 class="mt-5 mb-3 h3">Añadir producto nuevo</h1>

<div class="card">
    <form action="{{route('productos.crear')}}" method="post" enctype="multipart/form-data">

<div class="form-row">
    @csrf
    <!--NOMBRE-->
       <div class="form-group col-lg-6">
          <label for="nombre">Nombre</label>
           <input     
                type="text" 
                id="nombre" 
                name="nombre" 
                class="form-control myInput"
                value="{{ old('nombre') }}" 
            />
            @if($errors->has('nombre'))
                <div class="alert alert-danger mt-2">{{ $errors->first('nombre') }}</div>
            @endif
       </div>
    
    <!--PRECIO-->
       <div class="form-group col-lg-6">
          <label for="precio">Precio</label>
           <input     
                type="text" 
                id="precio" 
                name="precio" 
                class="form-control myInput"
                value="{{ old('precio') }}" 
            />
            @if($errors->has('precio'))
                <div class="alert alert-danger mt-2">{{ $errors->first('precio') }}</div>
            @endif
       </div>
</div>            
<div class="form-row">
    
    <!--MARCA-->              
        <div class="form-group col">
          <label for="id_marca">Marca</label>
          <select name="id_marca" id="id_marca" class="form-control myInput">
              <option value="">Seleccionar Marca</option>
                @foreach($marcas as $marca)
                <option value="{{$marca->id_marca}}" {{old('id_marca') == $marca->id_marca ? 'selected' : ''}}>
                    {{$marca->nombre}}
                </option>
                @endforeach
          </select>
       @if($errors->has('id_marca'))
                <div class="alert alert-danger mt-2">{{ $errors->first('id_marca') }}</div>
            @endif            
       </div>
</div>
   
<div class="form-row">
    <!--DESCRIPCION-->
       <div class="form-group col">
          <label for="descripcion">Descripción</label>
           <textarea 
               name="descripcion" 
               id="descripcion" 
               cols="30" 
               rows="10"
               class="form-control myInput"
               >{{ old('descripcion') }}</textarea>
       </div>    
</div>                                   
                
<div class="form-row">
    <!--COLORES-->      
    <div class="form-group col">
        <label for="colores" class="d-block">Colores</label>
        @foreach($colores as $color)
            <div class="form-check form-check-inline checkColor">
              <input name="id_color[]" class="form-check-input" type="checkbox" id="check{{$color->nombre}}" value="{{$color->id_color}}"              
              >
              <label class="form-check-label" for="check{{$color->nombre}}"><i title="{{$color->nombre}}" class="fas fa-circle circulo{{$color->nombre}}"></i> {{$color->nombre}}</label>
            </div>
        @endforeach
    </div>
</div>
   
    <!--TALLES-->      
<div class="form-row">
       <div class="col">
           
        <h1 class="h5 talleTitulo">Talles Disponibles</h1>
        <div class="d-block">
        @foreach($talles as $talle)
            <div class="form-check form-check-inline checkTalles mb-2">
              <input  name="id_talle[]" class="form-check-input" type="checkbox" id="check{{$talle->nombre}}" value="{{$talle->id_talle}}"                     
              >
              <label class="form-check-label talle" for="check{{$talle->nombre}}">{{$talle->nombre}}</label>
            </div>
        @endforeach

        </div>
       </div>
</div>
   
    <!--IMAGEN-->      
<div class="form-row mt-3">
   <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="d-block" name="imagen" id="imagen">
       @if($errors->has('imagen'))
            <div class="alert alert-danger mt-2">{{ $errors->first('imagen') }}</div>
       @endif     
   </div>
   
</div>
       
<button class="btn btn-success btn-block">Añadir Producto</button>                                              
        
    </form>
</div>



@endsection