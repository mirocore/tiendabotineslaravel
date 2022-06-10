<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Talle;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        
        $productos = Producto::with(['colores', 'talles', 'marca'])->orderBy('id_producto', 'desc')->paginate(7);
        
        
        return view('back/productos/listado', compact('productos'));
    }
    
    public function ver($id)
    {
        $producto = Producto::with(['marca','colores', 'talles'])->findOrFail($id);
        
        return view('back/productos/ver', compact('producto'));
    }
    
    public function formNuevo()
    {
        $marcas = Marca::all();
        $colores = Color::all();
        $talles = Talle::all();
        return view('back/productos/form-nuevo', compact('marcas', 'colores', 'talles'));
    }
    
    public function crear(Request $request)
    {
        // PIDO LA DATA DEL FORM
        $newData = $request->input();
        
        // VALIDO
        $request->validate(Producto::$rules, Producto::$messages);
        
        // IMAGEN
        if($request->imagen){
            $imagen = $request->imagen;
            $nombreImagen = time() . "." . $imagen->extension();
            $imagen->move(public_path('/img/botines'), $nombreImagen);
            $newData['imagen'] = $nombreImagen;
        }else{
            $newData['imagen'] = '';
        }
        
        // NUEVO REGISTRO
        $producto = Producto::create($newData);
        
        // COLORES Y TALLES
        $producto->colores()->attach($request->get('id_color'));
        $producto->talles()->attach($request->get('id_talle'));
        
        // VUELVO AL LISTADO
        return redirect()->route('productos.index')
            ->with('success', 'El producto ' . $producto->nombre . ' ha sido añadido a la base de datos.');
        
    }
    
    public function borrar($id)
    {
      $producto = Producto::findOrFail($id);
        $producto->talles()->detach();
        $producto->colores()->detach();
        
        
        $producto->delete();
        
        return redirect()->route('productos.index')
            ->with('success', 'El producto ' . $producto->nombre . ' ha sido borrado del sistema');
    }
    
    public function formEditar(Producto $producto)
    {
        $marcas = Marca::all();
        $colores = Color::all();
        $talles = Talle::all();
        return view('back/productos/form-editar', compact('producto', 'marcas', 'colores', 'talles'));
    }
    
    public function editar(Request $request, Producto $producto)
    {
      // TODO VALIDAR
        
        $input = $request->input();
        
        $request->validate(Producto::$rules, Producto::$messages);
        
        if($request->imagen){
            $imagen = $request->imagen;
            $nombreImagen = time() . "." . $imagen->extension();
            $imagen->move(public_path('img/botines/', $nombreImagen));
            
            $input['imagen'] = $nombreImagen;
        }
        
        $producto->update($input);
        $producto->colores()->detach();
        $producto->colores()->attach($request->get('id_color'));
        $producto->talles()->detach();
        $producto->talles()->attach($request->get('id_talle'));        
        
        return redirect()->route('productos.index')
            ->with('success', 'Han sido actualizados los datos del producto ' . $producto->nombre);
    }
    
    public function buscar(Request $request)
    {
        $rdo = $request->input('busqueda');
        $productos = Producto::with(['colores', 'talles', 'marca'])->where('nombre', 'like', '%' . $rdo . '%')->get();
        

        return view('back/productos/buscar', compact('productos', 'rdo'));

        
    }
    
}
