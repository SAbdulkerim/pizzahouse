<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

// ->name('pizzas.index') this crreate a name to the the rout
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth') ;
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth') ;

Route::get('/pizzas/create',[PizzaController::class,'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth') ;



// Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
