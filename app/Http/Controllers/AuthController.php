<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function mostrarLogin()
    {
        return view('back/auth/login');
    }
    
    public function doLogin(Request $request){
        
        if(!Auth::attempt(['password' => $request->input('password'), 'email' => $request->input('email')])){
            return redirect()->route('login.index')
                    ->withInput()
                    ->with('error-message', 'Las credenciales ingresadas no coinciden con nuestro registros.');
        }
        
        
        // SI ESTA LOGUEADO
            return redirect()->route('admin.index')
                ->with('success-message', 'Bienvenido al sitio');  
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index')
                ->with('success-message', 'Sesión cerrada.');
    }
}
