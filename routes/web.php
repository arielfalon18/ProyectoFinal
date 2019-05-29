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
Route::post('newIncidencia','DB\incidenciaController@store');
//Creamos un departamento
Route::post('CreateDepar', 'DB\departamentoController@NEWdepartamento');
//Mostramos los datos de departamento
//Lo pondemos post porque modificamos cada click
Route::post('DepartamentosPOST','DB\departamentoController@GetDepartamento');
//Mostrar incidencias

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
Route::get('InciarEmpleado', 'inicio@getFormulario')->middleware('guest');

Route::post('loginEmpleadoU', 'DB\loginUController@login')->name('loginEmpleadoU');

Route::get('logoutCA', 'DB\loginUController@logout')->name('logoutCA');


//Añadimos la ruta de tecnico para que pueda ver todos los datos de tecnico
Route::get('tecnico', 'vistas_de_empleados\tecnicoController@getIndex')->name('tecnico');

Route::get('incidenciasT','vistas_de_empleados\tecnicoIncidenciaController@getIncideciasP');

//Vistas del jefe personal quien decide que tecnico sera responsable de cada incidenci 
Route::get('JefePersonal','vistas_de_empleados\JefePersonalController@getIndex')->name('JefePersonal');

//Asignar la incidencia para un tecnico
Route::post('AsignarIncidencia' , 'DB\IncidenciaTecnico@InsertarAsignatura');
//MostrarIncidencia del tecnico 
Route::post('MostraIncidenciaTec','DB\IncidenciaTecnico@MostrarIncidenciAsignadas');

Route::get('MostrarContadorTec','vistas_de_empleados\tecnicoIncidenciaController@mostrarTecnicoIm');

Route::get('mostrarDescTecnico','vistas_de_empleados\tecnicoIncidenciaController@mostrarDescTec');
//Import csv  Departamento
Route::post('importCSV','CSV\importController@ImportFicheroInsert');
//Import empleados CSV tambien la tabla modal ya que va todo junto cada vez que se crea un usuario 
Route::post('importCSVEmpleado','CSV\importController@importCSVEmpleados');
//Exporta PDF
Route::get('exporPDFIncidencia' , 'CSV\exportController@exportPDF')->name('exporPDFIncidencia');
//Export a excel
Route::get('exporexcelIncidencia','CSV\exportController@exportExcel')->name('exporexcelIncidencia');
//----------------------------

//Tecnico Rutas tecnico 
//Cancelar incidencia
Route::post('DarResut','vistas_de_empleados\tecnicoIncidenciaController@AsignarRespuesta');

//Modificar perfil de usuario
Route::post('actualizarPerfil' ,'vistas_de_empleados\controladorPerfil@actualizarPerfil');

///Notificar error en la base de datos 
Route::post('NotificarErrores' ,'Auth\ControladorErroresBase@erroresNotificar');
