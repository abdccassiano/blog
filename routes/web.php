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

Route::redirect('/', '/home', 301);

Route::get('/hola-mundo', 'SaludarController@holaMundo');

Route::get('/home', 'HomeController@index');

Route::redirect('/', '/home');

Route::get('/hola/{persona?}', 'SaludarController@decirHola')->name('decir.hola');

Route::get('/bienvenido/{blogger?}', 'HomeController@bienvenido')->name('decir.bienvenido');

//Recuperamos el objeto $request que representa la petición
//Route::post('/noticia', 'Backend\NoticiaController@store')->name('noticia.store');
Route::namespace('Backend')->name('backend.')->prefix('/backend')->group(function () {
  //Controladores dentro del namespace "App\Http\Controllers\Backend"
  //Eliminamos  \Backend ya que lo hemo indicado en el grupo
  Route::post('/noticia', 'NoticiaController@store')->name('noticia.store');
  Route::get('/noticia/{id}', 'NoticiaController@show')->name('noticia.show');
});

Route::namespace('Frontend')->name('frontend.')->prefix('/frontend')->group(function () {
  //Controladores dentro del namespace "App\Http\Controllers\Frontend"
  //Eliminamos  \Frontend ya que lo hemo indicado en el grupo
  Route::post('/noticia', 'NoticiaController@store')->name('noticia.store');
  Route::get('/noticia/{id}', 'NoticiaController@show')->name('noticia.show');
});

Route::name('services.')->group(function () {
    Route::post('/noticia', 'NoticiaController@store')->name('noticia.store');
    Route::get('/noticia/{id}', 'NoticiaController@show')->name('noticia.show');
});

Route::namespace('Backend')->name('backend.')->prefix('/backend')->group(function () {
  //Route::post('/noticia', 'NoticiaController@store')->name('noticia.store');
  //Route::get('/noticia/{id}', 'NoticiaController@show')->name('noticia.show');
  Route::resource('noticia', 'NoticiaController');
  Route::resource('categoria', 'CategoriaController');
});
