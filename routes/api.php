<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/pessoas', [PessoaController::class, 'index']);
//Optei por injetar diretamente o model para o proprio Laravel ja buscar no banco e verificar se a pessoa existe
Route::get('/pessoa/{pessoa}', [PessoaController::class, 'show']);
