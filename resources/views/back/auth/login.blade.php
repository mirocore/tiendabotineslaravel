@extends('back.layout.adminmain')

@section('title')
    Login
@endsection

@section('main')
  <div class="row mt-5">
      <div class="col-sm-6 offset-sm-3">
           <div class="card py-5 px-5">
                <h1 class="h3 text-center mb-4">Login Form</h1>
                <form action="{{route('auth.doLogin')}}" method="post">
                   @csrf
                    <div class="form-group ">
                        <label class="sr-only" for="email">Email</label>
                        <input  type="email" 
                                class="form-control" 
                                name="email"
                                id="email"
                                placeholder="Email"
                                >
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-block btn-info mt-5">            
                </form>
                
@if(Session::has('error-message'))
    <div class="alert alert-danger mt-3">{{ Session::get('error-message') }}</div>
@endif
         
           </div>          
      </div>
  </div>

   
@endsection