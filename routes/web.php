<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Página de Inicio</h1>';
});

Route::get('/acerca-de', 'AcercadeController@index');
Route::get('/posts', 'PostController@index')->name('posts.index');

