<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Producto extends Model
{
    protected $table = "productos";
    
    protected $primaryKey = "id_producto";
    
    protected $fillable = ['nombre', 'precio', 'descripcion', 'imagen', 'id_marca'];
    
    public function marca()
    {    
      return $this->belongsTo(Marca::class,'id_marca', 'id_marca');   
    }
    
    public function colores()
    {
        return $this->belongsToMany(Color::class, 'productos_tienen_colores',
        'id_producto', 'id_color',
        'id_producto', 'id_color');
    }
    
    public function talles()
    {
        return $this->belongsToMany(Talle::class, 'productos_tienen_talles',
        'id_producto', 'id_talle',
        'id_producto', 'id_talle');
    }    
    
    public function crear(Request $request)
    {
        die(":D");
    } 
    
    public static $rules = [
        'nombre' => 'required|min:5|max:75',
        'precio' => 'required|numeric',
        'id_marca' => 'required|int|exists:marcas',
        'imagen' => 'mimes:jpeg,png,jpg',
    ];
    
    public static $messages = [
        'nombre.required' => 'El nombre es un requisito obligatorio',
        'nombre.min' => 'Debe contener al menos 5 caracteres',
        'nombre.max' => 'No puede contener más de 75 caracteres',
        'precio.required' => 'El precio es un requisito obligatorio',
        'precio.numeric' => 'El precio debe ser un número.',
        'id_marca.required' => 'La marca es un requisito obligatorio',
        'id_marca.int' => 'El id de la marca debe ser un número entero.',
        'id_marca.exists' => 'La marca no existe en los registros.',       
        'imagen.mimes' => 'El formato de la imagen debe ser jpg, jpeg o png.',       
    ];
}
