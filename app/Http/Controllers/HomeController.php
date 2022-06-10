<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Talle;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $recientes = Producto::with(['colores', 'talles', 'marca'])->limit(8)->get();    
        $umbro = Producto::with(['colores', 'talles', 'marca'])->where('id_marca', '=', 7)->limit(3)->get();    
        
        return view('front/inicio', compact('recientes', 'umbro'));
    }
}
