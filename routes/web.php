<?php

use App\Http\Controllers\Admin\PetsController;
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

Route::redirect('/', '/admin/pets');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('pets', [PetsController::class, 'pets'])->name('pets.listar');
    Route::get('pets/salvar', [PetsController::class, 'formAdicionar'])->name('pets.form');
    Route::post('pets/salvar', [PetsController::class, 'adicionar'])->name('pets.adicionar');
});
