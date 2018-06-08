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

//View::share('welcome', User::all());

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
      'uses' => 'UsersController@destroy',
      'as' => 'admin.users.destroy'
    ]);

    Route::get('resumen', function () {
      return view('admin.resumen');
    });

    Route::get('comparativa', function () {
      return view('admin.comparativa');
    });

    Route::get('notificaciones', function () {
      return view('admin.notificaciones');
    });

    Route::get('tutoriales', function () {
      return view('admin.tutoriales');
    });

    Route::get('estadisticas', function () {
      return view('admin.estadisticas');
    });

    Route::get('charlas', function () {
      return view('admin.charlas');
    });

});


Route::group(['prefix' => 'supervisor', 'as' => 'supervisor.'], function () {

    Route::get('resumen', function () {
      return view('supervisor.resumen');
    });

    Route::get('comparativa', function () {
      return view('supervisor.comparativa');
    });

    Route::get('notificaciones', function () {
      return view('supervisor.notificaciones');
    });

    Route::get('tutoriales', function () {
      return view('supervisor.tutoriales');
    });

    Route::get('charlas', function () {
      return view('supervisor.charlas');
    });

});



Route::group(['prefix' => 'reparto', 'as' => 'reparto.'], function () {

    Route::get('resumen', function () {
      return view('reparto.resumen');
    });

    Route::get('comparativa', function () {
      return view('reparto.comparativa');
    });

    Route::get('notificaciones', function () {
      return view('reparto.notificaciones');
    });

    Route::get('tutoriales', function () {
      return view('reparto.tutoriales');
    });

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
