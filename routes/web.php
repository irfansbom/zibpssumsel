<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('manajemenperubahan', [HomeController::class, 'manajemenperubahan']);
Route::get('tatalaksana', [HomeController::class, 'tatalaksana']);
Route::get('manajemensdm', [HomeController::class, 'manajemensdm']);
Route::get('akuntabilitas', [HomeController::class, 'akuntabilitas']);
Route::get('pengawasan', [HomeController::class, 'pengawasan']);
Route::get('pelayananpublik', [HomeController::class, 'pelayananpublik']);

Route::get('profile/', [ProfileController::class, 'index']);

Route::get('ZonaIntegritas/', [ProfileController::class, 'index']);
