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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('admin/sistema/permiso','PermisoController@index')->name('permiso');
Route::get('/','InicioController@index')->name('inicio');
Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');
Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware' => ['auth','superadmin']], function () {
    Route::get('','AdminController@index');
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('permiso/crear','PermisoController@create')->name('crear_permiso');
    /*Rutas del menu*/
    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/crear','MenuController@create')->name('crear_menu');
    Route::post('menu','MenuController@store')->name('guardar_menu');
    Route::get('menu/{id}/editar','MenuController@edit')->name('editar_menu');
    Route::put('menu/{id}','MenuController@update')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar','MenuController@destroy')->name('eliminar_menu');
    Route::post('menu/guardar-orden','MenuController@guardarOrden')->name('guardar_orden');
    /*Rutas del rol*/
    Route::get('rol','RolController@index')->name('rol');
    Route::get('rol/crear','RolController@create')->name('crear_rol');
    Route::post('rol','RolController@store')->name('guardar_rol');
    Route::get('rol/{id}/editar','RolController@edit')->name('editar_rol');
    Route::put('rol/{id}','RolController@update')->name('actualizar_rol');
    Route::delete('rol/{id}','RolController@destroy')->name('eliminar_rol');
    /*Rutas del menu-rol*/
    Route::get('menu-rol','MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol','MenuRolController@store')->name('guardar_menu_rol');
});