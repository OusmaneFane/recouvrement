<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RemiseController;
use App\Http\Controllers\CreanceControlleur;
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
Route::post('/check', [LoginController::class, 'check']);
Route::get('/login', [LoginController::class, 'login']);

Route::middleware(['list'])->group(function () {
    Route::get('/prospect', [ProspectController::class, 'page'])->name('prospect');
    Route::post('/prospect/data', [ProspectController::class, 'data'])->name('prospect');
    Route::get('/add_prospect', [ProspectController::class, 'data2'])->name('prospect');
    Route::post('/data_prospect', [ProspectController::class, 'send_data']);
    Route::get('/edit', [ProspectController::class, 'edit']);
    Route::get('/prospect/{data}/edit', [ProspectController::class, 'data_edit'])->name('edit');
    Route::put('/prospect/{data}', [ProspectController::class, 'update'])->name('update');
    Route::delete('/prospect/{data}', [ProspectController::class, 'destroy'])->name('destroy');

    Route::get('/add_remise', [RemiseController::class, 'create']);
    Route::get('/edit_remise', [RemiseController::class, 'edit']);
    Route::post('/add_remise', [RemiseController::class, 'add_remise']);
    Route::get('/remise/{data}/edit', [RemiseController::class, 'data_edit'])->name('edit');
    Route::put('/remise/{data}', [RemiseController::class, 'update'])->name('update');
    Route::delete('/remise/{data}', [RemiseController::class, 'destroy'])->name('destroy');

    Route::get('/add_debiteur', [CreanceControlleur::class, 'add']);
    Route::post('/data_debiteur', [CreanceControlleur::class, 'send_data']);

    Route::get('/add_creance', [CreanceControlleur::class, 'add_creance']);
    Route::get('/creance/{data}/edit', [CreanceControlleur::class, 'data_edit'])->name('edit');

    Route::get('/import_creance', [CreanceControlleur::class, 'view_import']);
    Route::post('/add_creance', [CreanceControlleur::class, 'send_creance']);

    Route::post('/import_creance', [CreanceControlleur::class, 'import_creance']);
    Route::get('/dashboard', [LoginController::class, 'dash'])->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
