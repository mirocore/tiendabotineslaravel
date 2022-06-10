<?php
use Illuminate\Support\Facades\Storage;
use App\Models\Usuario;

/** @var Usuario $usuario */
?>

@extends('back.layout.adminmain')

@section('title')
    {{$usuario ->apellido . ' ' . $usuario->nombre}}
@endsection


@section('main')
<div class="row">
    <div class="col">
        
<div class="d-block">
    <a href="{{route('usuarios.index')}}" class="bg-primary text-light py-2 px-2 rounded"><i class="fas fa-arrow-left"></i></i> Volver al listado</a>
</div>
     </div>
 </div> 
 <div class="row">
     <div class="col">
         
   <div class="card mt-3">
   <div class="row">
       <div class="col-sm-4 mb-2">
          @if($usuario->avatar == '')
           <img src="{{url('img/sinimagen.jpg')}}" alt="Sin imagen disponible" class="img-fluid">
           @else
           <img src="{{url('img/usuarios/'. $usuario->avatar)}}" alt="{{$usuario->nombre}}" class="img-fluid">
          @endif
       </div>
       <div class="col-sm-8">
            <h1 class="h2">{{$usuario->apellido . ' ' . $usuario->nombre}}</h1>
            <h2 class="h6 d-inline-block">Email:</h2>
            <p class="d-inline-block">{{$usuario->email}}</p>
       </div>
   </div>
      <div class="row mt-2">
       <div class="col">
           <a href="{{route('usuarios.form-editar', ['id' =>$usuario->id_usuario])}}" class="btn btn-block btn-primary">Editar Usuario</a>
       </div>   
      </div>
   </div>
    </div>
</div>
@endsection
