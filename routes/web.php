<?php

use App\Http\Controllers\UserPaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',function(){
    return 'Tablero principal';
});
Route::get('/users-payment', [UserPaymentController::class,'listaAlumnos']);
Route::get('/user/new', [ UserPaymentController::class ,'nuevoAlumno'])->name('nuevo-alumno');
Route::post('/user/save', [ UserPaymentController::class ,'guardarAlumno'])->name('guardar-alumno');
Route::post('/payments/save',[UserPaymentController::class,'savePayment'])->name('save-payment');

Route::get('php-info',function(){
    return phpinfo();
});
