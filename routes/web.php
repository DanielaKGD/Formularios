<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Neurolink;

Route::get('/',[Neurolink::class,'inicio']);
Route::get('/p',[Neurolink::class,'planti']);

Route::get('/trapecio/{h?}/{bg?}/{bc?}',[Neurolink::class,'parametro'])->name('trapecio');
Route::get('/apotema/{r?}', [Neurolink::class,'parametro'])->name('apotema');
Route::get('/cono/{r?}/{h?}', [Neurolink::class,'oculto'])->name('cono');

Route::get('/votar', [Neurolink::class,'pegar'])->name('votar');
Route::get('/sueldo', [Neurolink::class,'diez'])->name('sueldo');
Route::get('/calificaciones', [Neurolink::class,'porfa'])->name('calif');

Route::get('/profe',[Neurolink::class,'nueve'])->name('profe');
Route::get('/tabla');

Route::get('/area',[Neurolink::class,'datosArea'])->name('datosarea');
Route::post('/calculaarea',[Neurolink::class,'calculaarea'])->name('calculaarea');

Route::get('/login',[Neurolink::class, 'log'])->name('datossesion');
Route::post('/isesion', [Neurolink::class, 'iSesion'])->name('isesion');
Route::post('/sincontrase', [Neurolink::class, 'sinContrase'])->name('sincontrase');
Route::post('/sincorreo', [Neurolink::class, 'sinCorreo'])->name('sincorreo');