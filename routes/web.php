<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

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
//name
// Route::get('/', [NameController::class, 'index'])->name('layout.index');

//Type INDEX PAGE
Route::get('/', [TypeController::class, 'index'])->name('layout.index');
Route::get('/createTeam', [TypeController::class, 'list'])->name('type.list');
Route::get('/test', [TypeController::class, 'test'])->name('test');

// Route::get('/test', [TypeController::class, 'test'])->name('test');

Route::get('/create', [NameController::class, 'create'])->name('name.create');
Route::post('create', [NameController::class, 'store'])->name('name.store');



// Route::get('/createTeam{type}', [NameController::class, 'edit'])->name('name.edit');



//team
Route::get('/name_team', [TeamController::class, 'create'])->name('team.create');
Route::post('/name_team', [TeamController::class, 'store'])->name('team.store');
