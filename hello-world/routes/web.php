<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Olá Mundo";
});

Route::get('users/{id}', function ($id) {
    $data = ['id' => $id];
    return view('user', $data);
});

//carregando uma rota via troller
Route::get('user/{name}/{nascimento}', [HelloController::class, 'info']);
