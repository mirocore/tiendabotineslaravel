<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index()
    { 
        $usuarios = Usuario::orderBy('apellido')->get();
        
        return view('back/usuarios/listado', compact("usuarios")); 
    }
    
    public function ver($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('back/usuarios/ver', compact('usuario'));
        
    }
    
    public function formNuevo()
    {
        return view('back/usuarios/form-nuevo');
    }
    
    public function crear(Request $request)
    {
        // PIDO LA DATA DEL FORM
        $newData = $request->input();
        
        // VALIDO
        $request->validate(Usuario::$rules, Usuario::$messages);
        
        // IMAGEN
        if($request->avatar){
            $avatar = $request->avatar;
            $nombreAvatar = time() . "." . $avatar->extension();
            $avatar->move(public_path('/img/usuarios'), $nombreAvatar);
            $newData['avatar'] = $nombreAvatar;
        }else{
            $newData['avatar'] = '';
        }
        
        // PASSWORD
        $newData['password'] = Hash::make($newData['password']);
        
        // NUEVO REGISTRO
        $usuario = Usuario::create($newData);
        
        
        // VUELVO AL LISTADO
        return redirect()->route('usuarios.index')
            ->with('success', 'El usuario ' . $usuario->nombre . " " . $usuario->apellido .' ha sido añadido a la base de datos.');   
    }
    
    public function borrar($id)
    {
      $usuario = Usuario::findOrFail($id);
                
      $usuario->delete();
        
        return redirect()->route('usuarios.index')
            ->with('success', 'El usuario ' . $usuario->nombre . " "  . $usuario->apellido .' ha sido borrado del sistema');
    }
 
    public function formEditar(Usuario $usuario)
    {
        return view('back/usuarios/form-editar', compact('usuario'));
    }    
    
    public function editar(Request $request, Usuario $usuario)
    {   
        $input = $request->input();
        
        $request->validate(Usuario::$rulesEditar, Usuario::$messages);
        
        if($request->avatar){
            $avatar = $request->avatar;
            $nombreAvatar = time() . "." . $avatar->extension();
            $avatar->move(public_path('img/usuarios/', $nombreAvatar));
            
            $input['avatar'] = $nombreAvatar;
        }
        
        if($request->password){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input['password'] = $usuario->password;
        }
        
        $usuario->update($input);       
        
        return redirect()->route('usuarios.index')
            ->with('success', 'Han sido actualizados los datos del usuario ' . $usuario->nombre . " " . $usuario->apellido);
    }    
    
}
