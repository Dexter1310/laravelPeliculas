<?php
Auth::routes();

Route::get('/', 'HomeController@getHome')->name('home');

//Route::get('/', 'HomeController@index');
//Route::get('/', 'HomeController@getHome');


Route::get('/catalog', 'CatalogController@getIndex')->name('peli');
Route::get('/catalog/show/{id}', 'CatalogController@getShow');


//aqui hacemos un get para mostrar al usuario y un post para  innsertar en la base de datos

Route::get('/catalog/create', 'CatalogController@getCreate');
Route::post('/catalog/create/nueva', 'CatalogController@store');



Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
Route::post('/catalog/edit/nueva{id}', 'CatalogController@modificar');


///////////////////vista del correo////////////////////////////////

Route::get('/catalog/compartir{id}', 'CatalogController@getCorreo');
Route::post('/catalog/compartir{id}', 'CatalogController@correo');


///////////////////alquiler - devuelta////////////////////////////////
Route::get('/catalog/alquilada', 'CatalogController@alquiler');
Route::get('/catalog/devuelta', 'CatalogController@retornada');

///////////////////borrado  pelicula/////////////////////////

Route::get('/catalog/alquilada{id}', 'CatalogController@borrar');


?>



