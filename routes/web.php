<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificadoController;

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
Route::any('/', [CertificadoController::class, 'index'])->name('certificado.index');
Route::any('certificadoss/pesquisar', [CertificadoController::class, 'search'])->name('certificado.pesquisar');
Route::get('certificado/{id}/pdf', [CertificadoController::class, 'gerapdf'])->name('certificado.gerapdf');
Route::resource('certificados', CertificadoController::class);
