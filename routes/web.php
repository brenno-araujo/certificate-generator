<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

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

Route::get('certificado/{id}/pdf', [PdfController::class, 'gerapdf'])->name('certificado.gerapdf');
Route::resource('certificados', PdfController::class);
