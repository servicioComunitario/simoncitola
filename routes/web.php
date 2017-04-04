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

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/home', 'HomeController@index');
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/', ;});

////////////// Ruta alumnos ///////////////////////////////////
Route::name('alumnos_path')->get('/alumnos','AlumnoController@index');
// Route::name('create_alumno_path')->get('/alumno/create','AlumnoController@create');
// Route::name('store_alumno_path')->get('/alumnos','AlumnoController@store');
// Route::name('alumno_path')->get('/alumno/{alumno}','AlumnoController@show');
// Route::name('edit_alumno_path')->get('/alumno/{alumno}/edit','AlumnoController@edit');
// Route::name('update_alumno_path')->get('/alumno/{alumno}/','AlumnoController@update');

















