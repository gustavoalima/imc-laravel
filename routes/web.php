<?php

use App\Http\Controllers\ImcController;

// Rota para o formulário de IMC na raiz
Route::get('/', [ImcController::class, 'showForm'])->name('home');

// Rota para o processamento do formulário
Route::post('/imc', [ImcController::class, 'calculateImc'])->name('imc.calculate');
