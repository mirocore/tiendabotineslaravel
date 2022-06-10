<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = "usuarios";
    protected $primaryKey = "id_usuario";
    protected $fillable = ['email', 'password', 'nombre', 'apellido', 'avatar'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function crear(Request $request)
    {
        die(":D");
    }
    
    public static $rules = [
        'nombre' => 'required|min:2',
        'apellido' => 'required|min:2',
        'email' => 'required|email:rfc',
        'password' => 'required|min:7',
        'avatar' => 'mimes:jpeg,png,jpg',
    ];
    
    public static $rulesEditar = [
        'nombre' => 'required|min:2',
        'apellido' => 'required|min:2',
        'email' => 'required|email:rfc',
        'avatar' => 'mimes:jpeg,png,jpg',
    ];    
    
    public static $messages = [
        'nombre.required' => 'El nombre es un requisito obligatorio',
        'nombre.min' => 'Debe contener al menos 2 caracteres',       
        'apellido.required' => 'El apellido es un requisito obligatorio',
        'apellido.min' => 'El apellido debe contener al menos 2 caracteres',       
        'email.required' => 'El email es obligatorio',       
        'email.email' => 'El formato del email no es correcto',       
        'password.required' => 'La contraseña es obligatoria',       
        'password.min' => 'La contraseña debe tener un mínimo de 7 caracteres',       
        'avatar.mimes' => 'La imagen debe tener una extensión jpg, jpeg o png',       
    ];    
    
}
