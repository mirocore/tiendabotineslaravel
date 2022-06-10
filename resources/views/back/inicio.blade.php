@extends('back.layout.adminmain')

@section('title')
    BIENVENIDO
@endsection

@section('main')

@if(Session::has('success-message'))
<div class="row">
    <div class="col">
        <div class="msj">
            <p>{{ Session::get('success-message') }}</p>
        </div>        
    </div>
</div>        
@endif
 
 
 <div class="row">
     <div class="col">
         <h1 class="h3 mt-4">Seleccionar tabla</h1>
     </div>
 </div>
 
 <div class="row">
     <div class="col">
        <div class="card">
            <div class="row">
                <div class="col">
                   <div class="row">
                       <div class="col-md-3">
                            <a href="{{route('productos.index')}}" class="tabla-sec">
                               <div>
                                        <i class="fas fa-box"></i>
                                        <h2>Listado de productos</h2>
                               </div>
                            </a>
                       </div>  

                       <div class="col-md-3">
                           <a href="{{route('usuarios.index')}}" class="tabla-sec">
                               <div>
                                        <i class="fas fa-user"></i>
                                        <h2>Listado de usuarios</h2>
                               </div>
                           </a>                                       
                       </div>
                         
                    </div>
                   </div>
                </div>                
            </div>
        </div>  
     </div>
 </div> 
@endsection