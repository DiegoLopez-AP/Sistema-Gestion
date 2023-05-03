<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

});

	// RUTAS HTML
	Route::get('plantilla', function() {
		return view('plantilla');
	})->name('plantilla');

	Route::get('formulario-captacion', function(){
		return view('formulario-captacion');
	})->name('formulario-captacion');

	Route::get('clienterut', function(){
		return view('clienterut');
	})->name('clienterut');

	Route::get('cliente', function(){
		return view('cliente');
	})->name('cliente');
	
	Route::get('contacto', function(){
		return view('contacto');
	})->name('contacto');
	
	Route::get('fecha-pago', function(){
		return view('fecha-pago');
	})->name('fecha-pago');

	Route::get('carpeta-documentos', function(){
		return view('carpeta-documentos');
	})->name('carpeta-documentos');



	// RUTAS COMERCIAL
	Route::get('indicador-com', function(){
		return view('comercial/indicador-com');
	})->name('indicador-com');

	Route::get('cotizaciones', function(){
		return view('comercial/cotizaciones');
	})->name('cotizaciones');

	Route::get('clientes', function(){
		return view('comercial/clientes');
	})->name('clientes');

	Route::get('contactos', function(){
		return view('comercial/contactos');
	})->name('contactos');

	Route::get('preventa', function(){
		return view('comercial/preventa');
	})->name('preventa');


	// RUTAS OPERACIONES
	Route::get('indicador-op', function(){
		return view('operaciones/indicador-op');
	})->name('indicador-op');

	Route::get('proyectos', function(){
		return view('operaciones/proyectos');
	})->name('proyectos');

	Route::get('costos', function(){
		return view('operaciones/costos');
	})->name('costos');

	Route::get('carta-gantt', function(){
		return view('operaciones/carta-gantt');
	})->name('carta-gantt');


	// RUTAS FINANZAS
	Route::get('indicador-fin', function(){
		return view('finanzas/indicador-fin');
	})->name('indicador-fin');

	Route::get('fechas-pago', function(){
		return view('finanzas/fechas-pago');
	})->name('fechas-pago');

	Route::get('facturacion', function(){
		return view('finanzas/facturacion');
	})->name('facturacion');

	Route::get('cobranzas', function(){
		return view('finanzas/cobranzas');
	})->name('cobranzas');


	// RUTAS  RRHH
	Route::get('indicador-rrhh', function(){
		return view('rrhh/indicador-rrhh');
	})->name('indicador-rrhh');

	Route::get('ficha-ptrabajador', function(){
		return view('rrhh/ficha-ptrabajador');
	})->name('ficha-ptrabajador');

	Route::get('formulario-ftrabajador', function(){
		return view('rrhh/formulario-ftrabajador');
	})->name('formulario-ftrabajador');

	Route::get('ap-rech-vaca', function(){
		return view('rrhh/ap-rech-vaca');
	})->name('ap-rech-vaca');

	Route::get('curriculum', function(){
		return view('rrhh/curriculum');
	})->name('curriculum');

	Route::get('solicitud-vacaciones', function(){
		return view('rrhh/solicitud-vacaciones');
	})->name('solicitud-vacaciones');




	// RUTAS INFORMES
	Route::get('indicador-inf', function(){
		return view('informes/indicador-inf');
	})->name('indicador-inf');

	Route::get('rentabilidad', function(){
		return view('informes/rentabilidad');
	})->name('rentabilidad');

	Route::get('capacites', function(){
		return view('informes/capacites');
	})->name('capacites');


	// RUTAS ADMINISTRACIÓN
	Route::get('usuarios', function(){
		return view('administracion/usuarios');
	})->name('usuarios');

	Route::get('permisos', function(){
		return view('administracion/permisos');
	})->name('permisos');

	Route::get('indicadores-adm', function(){
		return view('administracion/indicadores-adm');
	})->name('indicadores-adm');

	Route::get('valores', function(){
		return view('administracion/valores');
	})->name('valores');

	

	



	


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');










