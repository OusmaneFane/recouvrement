<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RemiseController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\CreanceControlleur;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Creance2Controller;
use App\Models\Creance;

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
Route::get('/logout', [LoginController::class, 'logout']);

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

    Route::get('/historique', [CreanceControlleur::class, 'hist'])->name('historique');
    Route::get('/edit_creance', [CreanceControlleur::class, 'edit_creance'])->name('edit_creance');

});

Auth::routes();
Route::middleware(['2fa'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/2fa', function () {
        return redirect(route('homesite'));
    })->name('2fa');
});
Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])->name('complete.registration');

Route::get('/homesite', [App\Http\Controllers\HomeController::class, 'index2'])->name('homesite');





// Dashboard2
Route::get('/dashboard2', [LoginController::class, 'dash2'])->name('dashboard2');
//emprunteurs
Route::get('/add_emprunt', [EmpruntController::class, 'add_emprunt']);
Route::post('/add_emprunt', [EmpruntController::class, 'store']);
Route::get('/edit_emprunt', [EmpruntController::class, 'edit_emprunt'])->name('edit_emprunt');

Route::get('/emprunteur/{data}/edit', [EmpruntController::class, 'data_edit'])->name('edit');
Route::put('/emprunteur/{data}', [EmpruntController::class, 'update'])->name('update');
Route::delete('/emprunteur/{data}', [EmpruntController::class, 'destroy'])->name('destroy');
//creances2
Route::get('/add_creance2', [Creance2Controller::class, 'add_creance2']);
Route::post('/add_creance2', [Creance2Controller::class, 'send_creance2']);
Route::get('/edit_creance2', [Creance2Controller::class, 'edit_creance2'])->name('edit_creance2');
Route::get('/paiement', [Creance2Controller::class, 'paie']);
Route::post('/paiement', [Creance2Controller::class, 'send_paie']);
Route::get('/pay/{data}/edit', [Creance2Controller::class, 'data_edit'])->name('edit');
Route::delete('/pay/{data}', [Creance2Controller::class, 'destroy'])->name('destroy');
Route::get('/rappel', [Creance2Controller::class, 'rappel'])->name('rappel');
Route::post('/add_rappelPaiement', [Creance2Controller::class, 'send_rappel']);

Route::get('/dossiers', 'DossierController@index')->name('dossiers.index');
Route::get('/dossiers/create', 'DossierController@create')->name('dossiers.create');
Route::post('/dossiers', 'DossierController@store')->name('dossiers.store');
Route::get('/dossiers/{id}', 'DossierController@show')->name('dossiers.show');
Route::get('/dossiers/{id}/edit', 'DossierController@edit')->name('dossiers.edit');
Route::put('/dossiers/{id}', 'DossierController@update')->name('dossiers.update');
Route::delete('/dossiers/{id}', 'DossierController@destroy')->name('dossiers.destroy');

