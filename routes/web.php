<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{
    AdocoesController,
    ClientesController,
    ContatosController,
    CoresController,
    EspeciesController,
    GeneroPetsController,
    HistoricoAdocoesController,
    HistoricoClientesController,
    HistoricoPetsController,
    PetsController,
    PortesController,
    RacasController,
    SexosController,
    StatusController
};
use Database\Factories\EspeciesFactory;
use Database\Factories\HistoricoAdocoesFactory;

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

        Route::prefix('clientes')
        ->controller(ClientesController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('clientes.index');
            Route::get('/novo', 'create')
                ->name('clientes.create');
            Route::get('/editar/{id}', 'edit')
                ->name('clientes.edit');
            Route::get('exibir/{id}', 'show')
                ->name('clientes.show');

            Route::post('cadastrar', 'store')
                ->name('clientes.store');
            Route::post('atualizar/{id}', 'update')
                ->name('clientes.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('clientes.destroy');
        });


Route::prefix('contatos')
        ->controller(ContatosController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('contatos.index');
            Route::get('/novo', 'create')
                ->name('contatos.create');
            Route::get('/editar/{id}', 'edit')
                ->name('contatos.edit');
            Route::get('exibir/{id}', 'show')
                ->name('contatos.show');

            Route::post('cadastrar', 'store')
                ->name('contatos.store');
            Route::post('atualizar/{id}', 'update')
                ->name('contatos.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('contatos.destroy');
        });

Route::prefix('cores')
        ->controller(CoresController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('cores.index');
            Route::get('/novo', 'create')
                ->name('cores.create');
            Route::get('/editar/{id}', 'edit')
                ->name('cores.edit');
            Route::get('exibir/{id}', 'show')
                ->name('cores.show');

            Route::post('cadastrar', 'store')
                ->name('cores.store');
            Route::post('atualizar/{id}', 'update')
                ->name('cores.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('cores.destroy');
        });


Route::prefix('especies')
        ->controller(EspeciesController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('especies.index');
            Route::get('/novo', 'create')
                ->name('especies.create');
            Route::get('/editar/{id}', 'edit')
                ->name('especies.edit');
            Route::get('exibir/{id}', 'show')
                ->name('especies.show');

            Route::post('cadastrar', 'store')
                ->name('especies.store');
            Route::post('atualizar/{id}', 'update')
                ->name('especies.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('especies.destroy');
        });


Route::prefix('generoPets')
        ->controller(GeneroPetsController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('generoPets.index');
            Route::get('/novo', 'create')
                ->name('generoPets.create');
            Route::get('/editar/{id}', 'edit')
                ->name('generoPets.edit');
            Route::get('exibir/{id}', 'show')
                ->name('generoPets.show');

            Route::post('cadastrar', 'store')
                ->name('generoPets.store');
            Route::post('atualizar/{id}', 'update')
                ->name('generoPets.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('generoPets.destroy');
        });


Route::prefix('historicoAdocoes')
        ->controller(HistoricoAdocoesFactory::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('historicoAdocoes.index');
            Route::get('/novo', 'create')
                ->name('historicoAdocoes.create');
            Route::get('/editar/{id}', 'edit')
                ->name('historicoAdocoes.edit');
            Route::get('exibir/{id}', 'show')
                ->name('historicoAdocoes.show');

            Route::post('cadastrar', 'store')
                ->name('historicoAdocoes.store');
            Route::post('atualizar/{id}', 'update')
                ->name('historicoAdocoes.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('historicoAdocoes.destroy');
        });


Route::prefix('historicoClientes')
        ->controller(HistoricoClientesController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('historicoClientes.index');
            Route::get('/novo', 'create')
                ->name('historicoClientes.create');
            Route::get('/editar/{id}', 'edit')
                ->name('historicoClientes.edit');
            Route::get('exibir/{id}', 'show')
                ->name('historicoClientes.show');

            Route::post('cadastrar', 'store')
                ->name('historicoClientes.store');
            Route::post('atualizar/{id}', 'update')
                ->name('historicoClientes.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('historicoClientes.destroy');
        });

Route::prefix('historicoPets')
        ->controller(HistoricoPetsController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('historicoPets.index');
            Route::get('/novo', 'create')
                ->name('historicoPets.create');
            Route::get('/editar/{id}', 'edit')
                ->name('historicoPets.edit');
            Route::get('exibir/{id}', 'show')
                ->name('historicoPets.show');

            Route::post('cadastrar', 'store')
                ->name('historicoPets.store');
            Route::post('atualizar/{id}', 'update')
                ->name('historicoPets.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('historicoPets.destroy');
        });

Route::prefix('pets')
        ->controller(PetsController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('pets.index');
            Route::get('/novo', 'create')
                ->name('pets.create');
            Route::get('/editar/{id}', 'edit')
                ->name('pets.edit');
            Route::get('exibir/{id}', 'show')
                ->name('pets.show');

            Route::post('cadastrar', 'store')
                ->name('pets.store');
            Route::post('atualizar/{id}', 'update')
                ->name('pets.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('pets.destroy');
        });

Route::prefix('portes')
        ->controller(portes::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('portes.index');
            Route::get('/novo', 'create')
                ->name('portes.create');
            Route::get('/editar/{id}', 'edit')
                ->name('portes.edit');
            Route::get('exibir/{id}', 'show')
                ->name('portes.show');

            Route::post('cadastrar', 'store')
                ->name('portes.store');
            Route::post('atualizar/{id}', 'update')
                ->name('portes.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('portes.destroy');
        });

Route::prefix('racas')
        ->controller(RacasController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('racas.index');
            Route::get('/novo', 'create')
                ->name('racas.create');
            Route::get('/editar/{id}', 'edit')
                ->name('racas.edit');
            Route::get('exibir/{id}', 'show')
                ->name('racas.show');

            Route::post('cadastrar', 'store')
                ->name('racas.store');
            Route::post('atualizar/{id}', 'update')
                ->name('racas.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('racas.destroy');
        });

Route::prefix('sexos')
        ->controller(SexosController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('sexos.index');
            Route::get('/novo', 'create')
                ->name('sexos.create');
            Route::get('/editar/{id}', 'edit')
                ->name('sexos.edit');
            Route::get('exibir/{id}', 'show')
                ->name('sexos.show');

            Route::post('cadastrar', 'store')
                ->name('sexos.store');
            Route::post('atualizar/{id}', 'update')
                ->name('sexos.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('sexos.destroy');
        });

Route::prefix('status')
        ->controller(StatusController::class)
        ->middleware('auth')
        ->group(function () {
            Route::get('/', 'index')
                ->name('status.index');
            Route::get('/novo', 'create')
                ->name('status.create');
            Route::get('/editar/{id}', 'edit')
                ->name('status.edit');
            Route::get('exibir/{id}', 'show')
                ->name('status.show');

            Route::post('cadastrar', 'store')
                ->name('status.store');
            Route::post('atualizar/{id}', 'update')
                ->name('status.update');
            Route::post('excluir/{id}', 'destroy')
                ->name('status.destroy');
        });



Route::controller(ProfileController::class)->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
