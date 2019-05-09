<?php

Route::get('/', 'HomeController@getHome');
Route::get('inicio', 'inicio@getIndex');
Route::get('user', 'UsuarioController@getIndex')->name('user');
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
Route::post('/incidencia/newIncidencia', 'DB\incidenciaController@newIncidencia');
//Creamos un departamento
Route::post('CreateDepar', 'DB\departamentoController@NEWdepartamento');
//Mostramos los datos de departamento
Route::get('DepartamentosGET','DB\departamentoController@GetDepartamento');
//Mostrar incidencias
Route::get('index','incidenciaController@index');

//Creamos un Inventario
Route::post('/inventario/NewInvenatario', 'DB\InventarioController@NewInvenatario');

//Mostramos todos los usuario sin paginacion 

Route::get('empleadosAll','DB\empleadosController@empleadoAll');


//Inventarios 
Route::post('CreateInventario' , 'DB\InventarioController@NewInvenatario');
Route::get('InventarioGET','DB\InventarioController@GetInventario');


//Mostrar los ROl de empresa 
Route::get('RolEmpleadoGET','DB\RolController@GetRol');
//--------------------------------
//VER TODOS LOS DATOS 
Route::get('empleados', 'DB\empleadosController@VerEmpreados');
//INSERTAR DATOS DE EMPLEADOS 7
Route::post('NEWempleados' , 'DB\empleadosController@NEWempleados');

//Eliminamos los datos de empleados
Route::get('empreadoE/{id}','DB\empleadosController@eliminarEmpleado');


//Hacemos una relacion que con estos datos se pueda loguear un empleado a la base de datos 
Route::get('InciarEmpleado', 'inicio@getFormulario');

Route::post('loginEmpleadoU', 'DB\loginUController@login')->name('loginEmpleadoU');

Route::get('logoutCA', 'DB\loginUController@logout')->name('logoutCA');


//Añadimos la ruta de tecnico para que pueda ver todos los datos de tecnico
Route::get('tecnico', 'vistas_de_empleados\tecnicoController@getIndex');

Route::get('incidenciasT','vistas_de_empleados\tecnicoIncidenciaController@getIncideciasP');


