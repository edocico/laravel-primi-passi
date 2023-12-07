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

    $presentazione = [
        "nome" => "Edoardo",
        "cognome"=>"Cicognani",
        "study"=>"Web Developer"
    ];

    $elenco = [
        "items" => ["HTML", "CSS", "Sass", "Javascript", "VueJS", "PHP" , "Laravel"]
        
    ];

    return view('home',$presentazione,$elenco);
});

Route::get('/chi-sono', function () {
    return view('chi-sono');
});

Route::get('/contatti', function () {

    $data = [
        "contacts" => ["34493277643", "fake.email@fake.com"]
    ];

    return view('contatti', $data);
});


 