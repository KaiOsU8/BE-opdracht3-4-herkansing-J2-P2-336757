<?php

use App\Http\Controllers\TypeVoertuigController;
use App\Http\Controllers\VoertuigController;
use App\Http\Controllers\VoertuigInstructeurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/voertuig/create/{instructeur}', [VoertuigController::class, 'create'])->name('voertuig.create');
Route::post('/instructeur/{instructeur}/voertuig/{voertuig}/add', [InstructeurController::class, 'addVoertuig'])->name('instructeur.voertuig.add');
Route::get('/instructeur/{id}/activate', [InstructeurController::class, 'activate'])->name('instructeur.activate');
Route::get('/instructeur/{id}/deactivate', [InstructeurController::class, 'deactivate'])->name('instructeur.deactivate');
Route::delete('/instructeur/{instructeurId}/removeVoertuig/{voertuigId}', [InstructeurController::class, 'removeVoertuig'])->name('instructeur.removeVoertuig');
Route::get('instructeur/{instructeur}/reassign/{voertuig}', [InstructeurController::class, 'reassign'])->name('instructeur.reassign');
Route::post('instructeur/{instructeur}/reassign/{voertuig}', [InstructeurController::class, 'doReassign'])->name('instructeur.doReassign');

Route::resource('instructeur', InstructeurController::class);
Route::resource('voertuig', VoertuigController::class);
Route::resource('instructeur.typevoertuig', TypeVoertuigController::class);
Route::resource('voertuigInstructeur', VoertuigInstructeurController::class);
Route::resource('voertuigInstructeur.voertuig', VoertuigController::class);
Route::resource('voertuigInstructeur.instructeur', InstructeurController::class);






