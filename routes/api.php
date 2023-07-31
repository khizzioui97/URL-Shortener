<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkController;

Route::get('/',function (){
    return "hello from api";
});


Route::post('/shorten', [LinkController::class, 'shorten']);
Route::get('/stats',[LinkController::class, 'stats']);
Route::get('/{code}', [LinkController::class,'redirect']);