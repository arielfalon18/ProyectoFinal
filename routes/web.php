<?php



Route::get('/', 'HomeController@getHome');


Route::get('inicio', 'inicio@getIndex');

Route::get('registrarse', 'Auth\LoginController@showLoginform')->middleware('guest');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('crear', 'Auth\LoginController@create');


Route::post('nuevoR', 'Auth\ConsultasController@nuevoR');

//Nosotros

Route::get('Nosotros', function () {
    return view('datos.nosotros');
});
//Contactos
Route::get('Contactos', function () {
    return view('datos.contactos');
});


// DATOS DE BASE DE DATOS 
//VER TODOS LOS DATOS 
Route::get('empleados', 'DB\empleadosController@VerEmpreados');
//INSERTAR DATOS DE EMPLEADOS 7
Route::post('NEWempleados' , 'DB\empleadosController@newEmpleados');

//-------------------------------------------------

