<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PaymentsController;

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

// Buy me a coffee page
Route::get('/saythanks', [PagesController::class, 'saythanks']);

// *********************//
// ** Payment routes ** //
// *********************//

// Handle form submission to start the payment process
Route::post('/payment/start', [PaymentsController::class, 'start'])->name('payment.start');

// Display the checkout page
Route::get('/payment/checkout', [PaymentsController::class, 'checkout'])->name('payment.checkout');

// Confirm the payment
Route::get('/payment/confirm', [PaymentsController::class, 'confirm'])->name('payment.confirm');

// (Optional) Reset the payment session (like a "cancel payment" action)
Route::get('/payment/reset', [PaymentsController::class, 'reset'])->name('payment.reset');