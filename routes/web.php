<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PizzaController;

Route::resource('pizzas', PizzaController::class);
