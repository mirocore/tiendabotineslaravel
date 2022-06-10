<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Talle;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function listado()
    {
        $productos = Producto::with(['colores', 'talles', 'marca'])->orderBy('nombre')->paginate(12);
        $marcas = Marca::all();
        
        return view('front/tienda/listado', compact('productos', 'marcas'));
    }
    
    public function filtrarTienda($id)
    {
        
        $productos = Producto::with(['marca','colores', 'talles'])->where('id_marca', '=', $id)->paginate(12);
        $marcas = Marca::all();
        $marcaActual = Marca::findOrFail($id);
        
        return view('front/tienda/filtro', compact('productos', 'id', 'marcas', 'marcaActual'));
    }
    
    public function ver($id)
    {
        $producto = Producto::with(['marca','colores', 'talles'])->findOrFail($id);
        
        return view('front/tienda/ver', compact('producto'));
    }
    
    public function buscar(Request $request)
    {
        $rdo = $request->input('busqueda');
        $productos = Producto::with(['colores', 'talles', 'marca'])->where('nombre', 'like', '%' . $rdo . '%')->get();
        

        return view('front/tienda/buscar', compact('productos', 'rdo'));  
    }    
}
