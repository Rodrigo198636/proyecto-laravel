<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


use App\Mail\ContactanosMaillable; // Ajusta la ruta y el nombre del namespace según tu estructura
use Illuminate\Support\Facades\Mail;
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
 /* 
Route::get('/', PizzaController::class)->name('Home');    */



Route::get('pizza', [PizzaController::class, 'pizza'])->name('pizza.pizza');


Route::get('Pizza/crea', [PizzaController::class, 'crea'])->name('pizzas.crea');

Route::post('pizzas', [PizzaController::class, 'store'])->name('pizzas.store');


Route::get('pizza/{id}', [PizzaController::class, 'tupizza'])->name('pizzas.tupizza');

Route::get('pizzas/(pizza)/edit',  [PizzaController::class, 'edit'])->name('pizzas.edit');

Route::put('pizzas/(pizza)',  [PizzaController::class, 'update'])->name('pizzas.update');

Route::delete('pizzas/(pizza)',  [PizzaController::class, 'detroy'])->name('pizzas.destroy');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', function () {
    $correo = new ContactanosMaillable();

    Mail::to('metalboy8627@gmail.com')->send($correo);

    return "Mensaje Enviado";
});