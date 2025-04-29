<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'inicio']);

Route::get('/fotos', [PagesController::class, 'fotos'])->name('fotos');

Route::get('/noticias', [PagesController::class, 'noticias'])->name('noticias');




Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('nosotros'); 

