<?php

use App\Http\Controllers\VacanteController;
use Illuminate\Auth\Events\Verified;
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

Route::get('/dashboard', [VacanteController::class, 'index']) ->middleware(['auth', 'verified'])->name('vacantes.index');
Route::get('/vacantes/crear', [VacanteController::class, 'create']) ->middleware(['auth', 'verified'])->name('vacantes.create');
Route::get('/vacantes/{vacante}/editar', [VacanteController::class, 'edit']) ->middleware(['auth', 'verified'])->name('vacantes.edit');

require __DIR__.'/auth.php';
 