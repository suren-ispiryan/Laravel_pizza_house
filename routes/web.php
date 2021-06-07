<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\SignupController;


//=========================== Home page ===================================

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form'); // kamayakan anun



//============================== Pizzas =====================================

Route::get('add_pizza', function () {
    return view('add_pizza');
})->name('add_pizza');

Route::get('create_pizza', function () {
    return view('create_pizza');
})->name('create_pizza');

Route::get('ordered', function () {
    return view('ordered');
})->name('ordered');

    // conect routes with controller
Route::post('create_pizza', [PizzaController::class, 'create']); 
Route::get('add_pizza', [PizzaController::class, 'show']);   // add_pizza linkov ej ber
Route::post('add_pizza', [PizzaController::class, 'order']); // add_pizza linkov ejic gna



//=================================== sign up =========================================

Route::get('sinup_success', function () { // gnaluc es linky dir 
    return view('signup_success'); // gna es ej
});

    // conect routes with controller
Route::post('signup_success', [SignupController::class, 'signup']); 
Route::post('/', [SignupController::class, 'login']); 
        //go to blade name      controller name      controllers function






