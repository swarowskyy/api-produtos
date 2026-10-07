<?php

use App\Models\Produto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::apiResource('produtos', ProdutoController::class);