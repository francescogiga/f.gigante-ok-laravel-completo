<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}',[PublicController::class, 'aboutUsDetail'] )->name('aboutUsDetail');


Route::get('/contatti', function (){
    return view('contacts');
})->name('contacts');

Route::get('/movies', [MovieController::class, 'movieList'])->name('movie.list');


Route::get('/movie/detail/{id}' ,[MovieController::class, 'movieDetail'] )->name('movie.detail');

Route::post('/contact-us',[PublicController::class, 'contactUs'])->name('contactUs');