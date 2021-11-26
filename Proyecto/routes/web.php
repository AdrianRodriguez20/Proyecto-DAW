<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/imprimirIES/{id}', 'App\Http\Controllers\GeneradorController@imprimirIES')->name('imprimirIES');

Route::get('/faqs', function () {
    return view('FAQs');
});

Route::resource('alumno', 'App\Http\Controllers\AlumnoController');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/alumno/{alumno}', [App\Http\Controllers\AlumnoController::class, 'show'])->name('/alumno/{alumno}');
    Route::get('/imprimirPDFanexoV/{id}', [App\Http\Controllers\GeneradorController::class, 'imprimirPDFanexoV'])->name('/imprimirPDFanexoV/{id}');
    Route::get('/imprimirCertificado/{file}', [App\Http\Controllers\GeneradorController::class, 'imprimirCertificado'])->name('/imprimirCertificado/{file}');

});
