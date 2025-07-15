<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ReservationsController;

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

// Dining page
Route::get('/dining', [PagesController::class, 'dining'])->name('dining');

// Rooms page
Route::get('/rooms', [PagesController::class, 'rooms'])->name('rooms');
// Individual room
Route::get('/rooms/{slug}', [PagesController::class, 'showRoom'])->name('rooms.show');

// Events page
Route::get('/events', [PagesController::class, 'events'])->name('events');
// Upcoming events
Route::get('/events/upcoming-events', [PagesController::class, 'upcomingEvents']);
// Venues
Route::get('/events/venue-hire', [PagesController::class, 'venues'])->name('venues');

// Pool & Spa page
Route::get('/pool-and-spa', [PagesController::class, 'pool']);

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
Route::post('/payment/confirm', [PaymentsController::class, 'confirm'])->name('payment.confirm');

// Payment complete
Route::get('/payment/completed', [PaymentsController::class, 'completed'])->name('payment.completed');

// Payment failed
Route::get('/payment/failed', function () {
    return view('payment.failed');
})->name('payment.failed');

// If user chooses to pay with BioPay
Route::post('/payment/setBiopay', [PaymentsController::class, 'setBiopay'])->name('payment.setBiopay');

// These were added by Laravel auth
Auth::routes();

// Dashboard 
//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    // Dashboard route, shows the main dashboard page
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

// **************************//
// ** Reservations Routes ** //
// **************************//
Route::get('/reservations/create', [ReservationsController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationsController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{id}/confirmation', [ReservationsController::class, 'confirmation'])->name('reservations.confirmation');
Route::delete('/reservations/{id}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');

/* errors */

// faux error
Route::get('/extranet-portal', [PagesController::class, 'extranetConnect']);