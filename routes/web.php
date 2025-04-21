<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EntertainmentController;

Route::get('/', [PagesController::class, 'index']);

Route::get('/entertainment', [PagesController::class, 'entertainment']);
Route::get('/entertainment/search', [EntertainmentController::class, 'search'])->name('entertainment.search');
Route::get('/entertainment/{slug}', [EntertainmentController::class, 'show'])->name('entertainment.show');


Route::get('/about', [PagesController::class, 'about']);
Route::get('/about/{alias}', [PagesController::class, 'teamMember']);
