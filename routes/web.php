<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\ReviewsController;

Route::get('/', [PagesController::class, 'index']);

// Entertainment page and everything associated is here:

// Main entertainment page that lists everything
Route::get('/entertainment', [PagesController::class, 'entertainment'])->name('entertainment.index');

// For search functionality
Route::get('/entertainment/search', [EntertainmentController::class, 'search'])->name('entertainment.search');

// Show individual attractions
Route::get('/entertainment/{slug}', [EntertainmentController::class, 'show'])->name('entertainment.show');

// End of Entertainment

// About page and everything associated is here
Route::get('/about', [PagesController::class, 'about']);
Route::get('/about/{alias}', [PagesController::class, 'teamMember']);
// End of about

// Reviews
Route::resource('reviews', ReviewsController::class);
