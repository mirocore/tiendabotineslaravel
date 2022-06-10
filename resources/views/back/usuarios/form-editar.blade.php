<?php
use App\Models\Usuario;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */
/** @var Usuario $usuario */
?>


@extends('back.layout.adminmain')

@section('title')
Editar Usuario
@endsection


@section('main')

<div class="row">
    <div class="col">    
        <div class="d-block">
            <a href="{{route('usuarios.index')}}" class="bg-primary text-light py-2 px-2 rounded">
                <i class="fas fa-arrow-left"></i></i> Volver al listado
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <h1 class="mt-5 mb-3 h3">Editar usuario</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        
<div class="card">
    <form action="{{route('usuarios.editar' , ['usuario' => $usuario->id_usuario]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="form-row">
    <!--NOMBRE-->
       <div class="form-group col-lg-6">
          <label for="nombre">Nombre</label>
           <input     
                type="text" 
                id="nombre" 
                name="nombre" 
                class="form-control myInput"
                value="{{ old('nombre')  ?? $usuario->nombre}}" 
            />
            @if($errors->has('nombre'))
                <div class="alert alert-danger mt-2">{{ $errors->first('nombre') }}</div>
            @endif
       </div>
    
    <!--APELLIDO-->
       <div class="form-group col-lg-6">
          <label for="apellido">Apellido</label>
           <input     
                type="text" 
                id="apellido" 
                name="apellido" 
                class="form-control myInput"
                value="{{ old('apellido')  ?? $usuario->apellido}}" 
            />
            @if($errors->has('apellido'))
                <div class="alert alert-danger mt-2">{{ $errors->first('apellido') }}</div>
            @endif
       </div>
</div>
   
<div class="form-row">
     <!--EMAIL-->
       <div class="form-group col-lg-6">
          <label for="email">Email</label>
           <input     
                type="email" 
                id="email" 
                name="email" 
                class="form-control myInput"
                value="{{ old('email')  ?? $usuario->email}}" 
            />
            @if($errors->has('email'))
                <div class="alert alert-danger mt-2">{{ $errors->first('email') }}</div>
            @endif
       </div>
     <!--CONTRASEÑA-->
       <div class="form-group col-lg-6">
          <label for="password">Contraseña</label>
           <input     
                type="password" 
                id="password" 
                name="password" 
                class="form-control myInput"
                value="{{ old('password')}}" 
            />
            @if($errors->has('password'))
                <div class="alert alert-danger mt-2">{{ $errors->first('password') }}</div>
            @endif
       </div>                
</div>                                   
                
   
<!--AVATAR-->      
<div class="form-row mt-3">
   <div class="form-group">
        <label for="avatar" class="d-block">Avatar</label>
        @if($usuario->avatar != '')
        <img src="{{url('img/usuarios/' . $usuario->avatar)}}" alt="{{$usuario->belcore . $usuario->nombre}}" class="img-mini mb-2 mr-2">
        @endif    
        <input type="file" name="avatar" id="avatar"> 
   </div>
</div>
       
<button class="btn btn-success btn-block">Editar Usuario</button>   
    </form>
</div>

    </div>
</div>


@endsection