<?php
use App\Models\Usuario;

/** @var Usuario $usuarios */
?>


@extends('back.layout.adminmain')

@section('title')
    Listado de usuarios
@endsection

@section('main')
<div class="row">
    <div class="col">
        <h1 class="h3 mb-4 d-inline-block mr-4">Listado de Usuarios</h1>
    </div>
</div>
   
<div class="row mb-3">
    <div class="col">
        <a href="{{route('usuario.form-nuevo')}}" class="rounded bg-success text-light d-inline-block py-2 px-2"><i class="rounded fas fa-plus-circle mr-3 "></i> Añadir Producto</a>
    </div>
</div>  
    



  @if(Session::has('success'))
     
    <div class="row">
        <div class="col">
              <div class="msj msj-ok">
                  <p>{{Session::get('success')}}</p>
              </div>
        </div>
    </div>       
      
  @endif
  
          
  <div class="row">
      <div class="col">
           <div class="card mb-5">
                <div class="table-responsive">
                    
                <table class="table table-bordered myTable">
                    <thead>
                        <tr>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr class="{{Auth::user()->id_usuario == $usuario->id_usuario ? 'text-warning' : ''}}">
                                <td>{{$usuario->apellido}}</td>
                                <td>{{$usuario->nombre}}</td>
                                <td> {{$usuario->email}}</td>
                                <td class="text-center">
                                    <!--VER DETALLES-->
                                    <a href="{{route('usuarios.ver', ['id' =>$usuario->id_usuario])}}"> <i title="Ver más" class="fas fa-search mr-2 hoverPlus" data-toggle="tooltip" data-placement="top" title="Ver más"></i></a>

                                    <!--BORRAR-->
                                    @if($usuario->id_usuario != Auth::user()->id_usuario)
                                    <form action="{{route('usuarios.borrar', ['id' => $usuario->id_usuario])}}"  method="post" class="d-inline">
                                       @csrf
                                       @method('DELETE')
                                        <button onclick="return confirm('¿Está seguro que desea borrar al usuario {{$usuario->nombre . " " . $usuario->apellido}}?');"  class="btn btn-link mx-0 my-0 px-0 py-0 sinBtn" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i title="Borrar" class="fas fa-trash-alt mr-2 hoverPlus"></i></button>
                                    </form> 
                                     @endif

                                    <!--EDITAR-->
                                    <a href="{{route('usuarios.form-editar', ['id' =>$usuario->id_usuario])}}" data-toggle="tooltip" data-placement="top" title="Editar"> <i title="Editar" class="fas fa-edit hoverPlus"></i></a>                                                     
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
           </div>
   
  </div>
</div>
   
@endsection