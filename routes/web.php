<?php
Route::get('/', 'HomeController@getHome');
Route::get('inicio', 'inicio@getIndex');
Route::get('user', 'UsuarioController@getIndex');
Route::get('registrarse', 'Auth\LoginController@showLoginform')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('crear', 'Auth\LoginController@create');
// Añadir nueva empresa datos de empresa
Route::post('NEWEmpresa', 'Auth\ConsultasController@nuevoR');
//Nosotros
Route::get('Nosotros', function () {
    return view('datos.nosotros');
});
//Contactos
Route::get('Contactos', function () {
    return view('datos.contactos');
});
// DATOS DE BASE DE DATOS 
//Crear una incidencia
Route::post('CrearInci', 'DB\incidenciaController@newIncidencia');
//Creamos un departamento
Route::post('CreateDepar', 'DB\departamentoController@NEWdepartamento');
//Mostramos los datos de departamento
Route::get('DepartamentosGET','DB\departamentoController@GetDepartamento');
//Mostrar los ROl de empresa 
Route::get('RolEmpleadoGET','DB\RolController@GetRol');
//--------------------------------
//VER TODOS LOS DATOS 
Route::get('empleados', 'DB\empleadosController@VerEmpreados');
//INSERTAR DATOS DE EMPLEADOS 7
Route::post('NEWempleados' , 'DB\empleadosController@NEWempleados');

//Eliminamos los datos de empleados
Route::get('empreadoE/{id}','DB\empleadosController@eliminarEmpleado');
//-------------------------------------------------