<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'panel-de-administrador', 'middleware'=>'auth'], function(){

    Route::get('/', [
        'uses'  => 'panelDeAdministradorController@index',
        'as'    => 'inicio.auth.inicio'
    ]); 

    route::group(['middleware'=> 'admin'], function(){
        Route::resource('users','UsersController');
        Route::get('users/{id}/destroy',[
            'uses' => 'UsersController@destroy',
            'as'    => 'panel-de-administrador.users.destroy'
            ]);
    });
	
Route::resource('clientes','ClientesController');
});

//route de accesos##############

Route::get('inicio/auth/login', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'inicio.auth.login'
]);	

Route::post('inicio/auth/login', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'inicio.auth.login'
]);

Route::get('inicio/auth/logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'inicio.auth.logout'
]);