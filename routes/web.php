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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@all');
Route::get('alquiler_maquinaria', function (){
    return view('alquiler_maquinaria');
});
Route::get('gruas_transportes_cubas', function (){
    return view('gruas_transportes_cubas');
});
Route::get('seccion_containers', function (){
    return view('seccion_containers');
});
Route::get('plataformas', function (){
    return view('plataformas');
});
Route::get('tijeras', function (){
    return view('tijeras');
});
Route::get('articuladas', function (){
    return view('articuladas');
});
Route::get('carretillas', function (){
    return view('carretillas');
});
Route::get('manipuladores_tele', function (){
    return view('manipuladores_tele');
});
Route::get('camion_cesta', function (){
    return view('camion_cesta');
});
Route::get('grupo_electro', function (){
    return view('grupo_electro');
});
Route::get('otras_maquinarias', function (){
    return view('otras_maquinarias');
});
Route::get('tipos_containers', function (){
    return view('tipos_containers');
});
Route::get('containers_usados', function (){
    return view('containers_usados');
});
Route::get('containers_nuevos', function (){
    return view('containers_nuevos');
});
Route::get('info', function (){
    return view('info');
});
Route::get('almacen_containex', function (){
    return view('almacen_containex');
});
Route::get('almacen_containex', function (){
    return view('almacen_containex');
});
Route::get('modul_containex', function (){
    return view('modul_containex');
});
Route::get('promociones', function (){
    return view('promociones');
});
Route::get('presupuestos', function (){
    return view('presupuestos');
});
Route::get('info_promociones', function (){
    return view('info_promociones');
});
Route::get('info_container', function (){
    return view('info_container');
});

Route::get('/posts/{post}', 'PostController@single');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
Route::get('/{post}/comments', 'CommentController@index');
Route::post('/{post}/comments', 'CommentController@store');
