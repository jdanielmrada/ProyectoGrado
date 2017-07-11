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

//Rutas frontend principales......

Route::get('/',[
    'as'=>'welcome.index',
    'uses'=>'FrontController@index'
    ]);
Route::get('ingreso',[
    'as'=>'welcome.ingreso',
    'uses'=>'FrontController@ingreso'
    ]);
Route::get('contacto',[
    'as'=>'welcome.contacto',
    'uses'=>'FrontController@contacto'
    ]);
//Rutas de imprimir........

Route::resource('PDFS','PDFController');

Route::group(['middleware'=>'auth'], function(){
    //Rutas de galerias########

    Route::get('galeria',[
        'as'=>'welcome.galeria',
        'uses'=>'FrontController@galeria'
        ]);
    Route::get('contacto',[
    'as'=>'welcome.contacto',
    'uses'=>'FrontController@contacto'
    ]);
    Route::get('empresa',[
        'as'=>'welcome.empresa',
        'uses'=>'FrontController@empresa'
        ]);
    Route::get('categories/{name}', [
        'uses'=> 'FrontController@searchCategory',
        'as'=> 'welcome.search.category'
        ]);
    Route::resource('sendsForms','SendsFormsController');
    Route::get('articles-detalle/{id}/detalle',[
        'uses'=> 'FrontController@detalle',
        'as'  => 'panel-de-administrador.front.detalle'
        ]);
});

//Rutas admiistrador....

Route::group(['prefix'=>'panel-de-administrador', 'middleware'=>'auth'], function(){

    Route::get('/', [
        'uses'  => 'panelDeAdministradorController@index',
        'as'    => 'inicio.auth.inicio'
    ]); 

    Route::group(['middleware'=> 'trainer'], function(){

        route::group(['middleware'=> 'admin'], function(){
            Route::resource('users','UsersController');
            Route::resource('editinfors', 'UsersEditInforController');
            Route::get('users/{id}/destroy',[
                'uses' => 'UsersController@destroy',
                'as'    => 'panel-de-administrador.users.destroy'
                ]);
            Route::get('users/{id}/informacion',[
                'uses' => 'UsersController@informacion',
                'as'    => 'panel-de-administrador.users.informacion'
                ]);
            Route::get('users/{id}/inforedit',[
                'uses' => 'UsersController@inforedit',
                'as'    => 'panel-de-administrador.users.inforedit'
                ]);
            Route::get('users/{id}/inforupdate',[
                'uses' => 'UsersController@inforupdate',
                'as'    => 'panel-de-administrador.users.inforupdate'
                ]);
        });

	    Route::resource('clientes','ClientesController');
            Route::get('clientes/{id}/destroy',[
                'uses' => 'ClientesController@destroy',
                'as'    => 'panel-de-administrador.clientes.destroy'
                ]);
        Route::resource('pagos','PagosController');
            Route::get('pagos/{id}/meses',[
                'uses' => 'PagosController@meses',
                'as'    => 'panel-de-administrador.pagos.meses'
                ]);
        Route::resource('adicionpagos','AdicionesPagosController');
    });

    Route::resource('categories','CategoriesController'); 
        Route::get('categories/{id}/destroy',[
            'uses'=> 'CategoriesController@destroy',
            'as'  => 'panel-de-administrador.categories.destroy'
            ]);
    Route::resource('articles','ArticlesController');
        Route::get('articles/{id}/destroy',[
            'uses'=> 'ArticlesController@destroy',
            'as'  => 'panel-de-administrador.articles.destroy'
            ]);
    Route::get('images',[
            'uses'=> 'ImagesController@index',
            'as'=> 'panel-de-administrador.images.index'
        ]);
    Route::resource('mensajes','MensajesController');
        Route::get('mensajes/{id}/destroy',[
            'uses'=> 'MensajesController@destroy',
            'as'  => 'panel-de-administrador.mensajes.destroy'
            ]);
    Route::resource('sendsForms','SendsFormsController');
    Route::resource('sessions','SessionsController');
        Route::get('sessions/{id}/destroy',[
            'uses'=> 'SessionsController@destroy',
            'as'  => 'panel-de-administrador.sessions.destroy'
            ]);
    
});


//Rutas de accesos##############

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