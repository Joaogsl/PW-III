<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('Contato');
});

Route::get('/categoria', function () {
    return view('Categoria');
});

Route::get('/cliente', function () {
    return view('Cliente');
});

Route::get('/pedido', function () {
    return view('Pedido');
});

Route::get('/produto', function () {
    return view('Produto');
});

