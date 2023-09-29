<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect()->route('adocoes.index');
})->middleware(['auth','verified'])->name('home');

Route::get('/dashboard', function () {
    return redirect()->route('adocoes.index');
    })->middleware(['auth', 'verified'])
        ->name('dashboard');

Route::prefix('adocoes')
        ->controller(AdocoesController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('adocoes.index');
            Route::get('/novo', 'create')
                ->name('adocoes.create');
            Route::get('/editar/{id}', 'edit')
                ->name('adocoes.edit');
            Route::get('exibir/{id}', 'show')
                ->name('adocoes.show');

            Route::post('cadastrar', 'store')
                ->name('adocoes.store');
            Route::post('atualizar/{id}', 'update')
                ->name('adocoes.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('adocoes.destroy');
        });

Route::controller(ProfileController::class)->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
