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

Route::get('/orcamento', 'orcamentoController@index')->name('orcamento');

Route::get('/contato', 'contatoController@index')->name('contato');

Route::get('/trabalhe-conosco', 'trabalheConoscoController@index')->name('trabalheConosco');
Route::post('/trabalhe-conosco', 'TrabalheConoscoController@store');

Route::get('/noticias', 'NoticiaController@index')->name('noticias');

Route::get('/admin', 'OrcamentoAdmin@index');
Route::get('/admin/mensagens', 'MensagemAdmin@index');
Route::get('/admin/curriculos', 'CurriculoAdmin@index');
Route::get('/admin/noticias', 'NoticiasAdmin@index');
Route::get('/admin/nova-noticia', 'NoticiasAdmin@novaNoticia');
Route::post('/admin/nova-noticia', 'NoticiasAdmin@salvarNoticia');
Route::delete('/admin/delNoticia/{id}', 'NoticiasAdmin@destroy');
Route::get('/admin/login', function(){
    return view('admin.login');
})->name('admLogin');
Route::post('/admin/login', 'LoginController@login');
Route::get('/admin/login/esqueceu-senha', 'LoginController@esqueceuSenha');
Route::get('/admin/logout', function(){
    session()->flush();
    return redirect('/admin');
});

Route::get('/admin/mudar-senha', 'MudarSenha@index');
Route::post('/admin/mudar-senha', 'MudarSenha@update');