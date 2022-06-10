<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FRONTEND

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'Home'
    ]);

    Route::get('tienda', [
        'uses' => 'TiendaController@listado',
        'as' => 'tienda.index'
    ]);

    Route::get('tienda/{id}/filtro', [
        'uses' => 'TiendaController@filtrarTienda',
        'as' => 'tienda.filtro'
    ]);

    Route::get('tienda/{id}', [
        'uses' => 'TiendaController@ver',
        'as' => 'tienda.ver'
    ])->where('id', '\d+');

    Route::get('tienda/buscar', [
        'uses' => 'TiendaController@buscar',
        'as' => 'tienda.buscar'
    ]);


//BACKEND

// AUTENTIFICACIÓN
Route::get('login', [
    'uses' => 'AuthController@mostrarLogin',
    'as' => 'login.index'
]);

Route::post('login', [
    'uses' => 'AuthController@doLogin',
    'as' => 'auth.doLogin'
]);

Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'auth.logout'
]);










Route::middleware(['auth'])->group(function() {

    Route::get('admin', [
    'uses' => 'AdminController@index',
    'as' => 'admin.index'
    ]);
     
    
    
    Route::get('productos', [
        'uses' => 'ProductosController@index',
        'as' => 'productos.index'
    ]);

    Route::get('productos/{id}', [
        'uses' => 'ProductosController@ver',
        'as' => 'productos.ver'
    ])->where('id', '\d+');

    Route::get('productos/nuevo', [
        'uses' => 'ProductosController@formNuevo',
        'as' => 'productos.form-nuevo'
    ]);
    
    Route::get('productos/buscar', [
        'uses' => 'ProductosController@buscar',
        'as' => 'productos.buscar'
    ]);    
    
    Route::post('productos/nuevo', [
        'uses' => 'ProductosController@crear',
        'as' => 'productos.crear'
    ]);
    
    Route::delete('productos/{id}', [
        'uses' => 'ProductosController@borrar',
        'as' => 'productos.borrar'
    ]);
    
    Route::get('productos/{producto}/editar', [
        'uses' => 'ProductosController@formEditar',
        'as' => 'productos.form-editar'
    ]);
    
    Route::put('productos/{producto}/editar', [
          'uses' => 'ProductosController@editar',
          'as' => 'productos.editar'
      ]);
    
    
    
    Route::get('usuarios', [
        'uses' => 'UsuariosController@index',
        'as' => 'usuarios.index'
    ]);
    
    Route::get('usuarios/{id}', [
        'uses' => 'UsuariosController@ver',
        'as' => 'usuarios.ver'
    ])->where('id', '\d+');
    
     Route::get('usuario/nuevo', [
        'uses' => 'UsuariosController@formNuevo',
        'as' => 'usuario.form-nuevo'
    ]);
    
    Route::post('usuarios/nuevo', [
        'uses' => 'UsuariosController@crear',
        'as' => 'usuarios.crear'
    ]);
    
    Route::delete('usuarios/{id}', [
        'uses' => 'UsuariosController@borrar',
        'as' => 'usuarios.borrar'
    ]);
    
    Route::get('usuarios/{usuario}/editar', [
        'uses' => 'UsuariosController@formEditar',
        'as' => 'usuarios.form-editar'
    ]);
    
    Route::put('usuarios/{usuario}/editar', [
          'uses' => 'UsuariosController@editar',
          'as' => 'usuarios.editar'
      ]);    
    
});
