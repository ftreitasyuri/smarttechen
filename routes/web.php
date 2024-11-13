<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Rotas que não exigem autenticação
Route::middleware('guest')->group(function(){
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/quem-somos', [MainController::class, 'quemSomos'])->name('quemSomos');
    Route::get('/desenvolvimento', [MainController::class, 'dev'])->name('dev');
    Route::get('/automacao-processos', [MainController::class, 'automacao'])->name('automacao');
    Route::get('/automacao-comercial-residencial', [MainController::class, 'homeAutomate'])->name('homeAutomate');
});
