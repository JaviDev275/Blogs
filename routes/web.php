<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'inicio'])->name('welcome');

Route::get('/nota/{id}', [PagesController::class, 'detalle'])->name('nota.detalle');

Route::post('/',action: [PagesController::class, 'crear']) ->name('notas.crear');

Route::get('/editar/{id}',[PagesController::class, 'editar']) ->name('notas.editar');

Route::put('/editar/{id}',action: [PagesController::class, 'actualizar']) ->name('notas.actualizar');

Route::delete('/eliminar/{id}',action: [PagesController::class, 'eliminar']) ->name('notas.eliminar');


Route::get('/fotos', [PagesController::class, 'fotos'])->name('fotos');

Route::get('/noticias', [PagesController::class, 'noticias'])->name('noticias');

Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('nosotros');