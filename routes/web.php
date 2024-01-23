<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeVoertuigController;
use App\Http\Controllers\VoertuigController;
use App\Http\Controllers\VoertuigInstructeurController;
use App\Models\TypeVoertuig;
use App\Models\Voertuig;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;
use App\Models\Instructeur;

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


Route::resource('instructeur', InstructeurController::class);
Route::resource('voertuig', VoertuigController::class);
Route::resource('instructeur.typevoertuig', TypeVoertuigController::class);
Route::resource('voertuigInstructeur', VoertuigInstructeurController::class);
Route::resource('voertuigInstructeur.voertuig', VoertuigController::class);
Route::resource('voertuigInstructeur.instructeur', InstructeurController::class);

//  // Voertuig routes
//  Route::get('/voertuig', [VoertuigController::class, 'view'])->name('voertuig.view');
//  Route::get('/voertuig/edit', [VoertuigController::class, 'edit'])->name('voertuig.edit');
//  Route::patch('/voertuig', [VoertuigController::class, 'update'])->name('voertuig.update');
//  Route::delete('/voertuig', [VoertuigController::class, 'destroy'])->name('voertuig.destroy');

//  // VoertuigInstructeur routes
//  Route::get('/voertuiginstructeur', [VoertuigInstructeurController::class, 'view'])->name('voertuiginstructeur.view');
//  Route::get('/voertuiginstructeur/edit', [VoertuigInstructeurController::class, 'edit'])->name('voertuiginstructeur.edit');
//  Route::patch('/voertuiginstructeur', [VoertuigInstructeurController::class, 'update'])->name('voertuiginstructeur.update');
//  Route::delete('/voertuiginstructeur', [VoertuigInstructeurController::class, 'destroy'])->name('voertuiginstructeur.destroy');

//  // TypeVoertuig routes
//  Route::get('/typevoertuig', [TypeVoertuigController::class, 'view'])->name('typevoertuig.view');
//  Route::get('/typevoertuig/edit', [TypeVoertuigController::class, 'edit'])->name('typevoertuig.edit');
//  Route::patch('/typevoertuig', [TypeVoertuigController::class, 'update'])->name('typevoertuig.update');
//  Route::delete('/typevoertuig', [TypeVoertuigController::class, 'destroy'])->name('typevoertuig.destroy');

//  // Instructeur routes
//  Route::get('/instructeur', [InstructeurController::class, 'view'])->name('instructeur.view');
//  Route::get('/instructeur/edit', [InstructeurController::class, 'edit'])->name('instructeur.edit');
//  Route::patch('/instructeur', [InstructeurController::class, 'update'])->name('instructeur.update');
//  Route::delete('/instructeur', [InstructeurController::class, 'destroy'])->name('instructeur.destroy');







