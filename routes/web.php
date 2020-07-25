<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/estrutura', function () {
    return view('estrutura');
})->name('estrutura');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/orcamento', function () {
    return view('orcamento');
})->name('orcamento');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

