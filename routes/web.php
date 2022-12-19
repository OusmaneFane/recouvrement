<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RemiseController;
use App\Http\Controllers\ProspectController;

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
Route::get('/login', [LoginController::class, 'login']);


Route::get('/prospect', [ProspectController::class, 'page'])->name('prospect');
Route::post('/prospect/data', [ProspectController::class, 'data'])->name('prospect');
Route::get('/add_prospect', [ProspectController::class, 'data2'])->name('prospect');
Route::post('/data_prospect', [ProspectController::class, 'send_data']);
Route::get('/edit', [ProspectController::class, 'edit']);
Route::get('/prospect/{data}/edit', [ProspectController::class, 'data_edit'])->name('edit');
Route::put('/prospect/{data}', [ProspectController::class, 'update'])->name('update');
Route::delete('/prospect/{data}', [ProspectController::class, 'destroy'])->name('destroy');

Route::get('/add_remise', [RemiseController::class, 'create']);
Route::get('/edit_remise', [RemiseController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
