<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::get('/', function () {
    return view('form');
});
Route::post('/form', [FormulirController::class, 'formCheck'])->name('form.check');
