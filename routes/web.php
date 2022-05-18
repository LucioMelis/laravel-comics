<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $fumetti = @include('../config/comics.php');
    return view('home', ["comics" => $fumetti ]);
});

Route::get('singleCard', function(){
    $fumetti = @include('../config/comics.php');
    // Ho fatto un paio di prove per riuscire a prendere l'index
    // dal ciclo della home, e passarglielo qui nel return,
    // ma non ci sono riuscito =(
    return view('partials/homeCard',["comics"=> $fumetti[0]]);
});
