<?php

use Illuminate\Support\Facades\Route;

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


    return view('homepage');
});

Route::get('/azienda', function () {

    return view('azienda');
});

Route::get('/distination', function () {
    $array1 = ["Roma", "Napoli", "Praga","Firenze","Milano","Bolognia"];

    return view('distination',['array1' =>$array1]);
});

Route::get('/contact', function () {

    return view('contact');
});
Route::get('/roma', function () {
   echo "sono a roma";

    return view('roma');
});


