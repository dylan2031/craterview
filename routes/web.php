<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\ConverterController;
use App\Http\Controllers\Dashboard\PromosController;


// **************************//
// **        Home          **//
// **************************//
Route::get('/', [PagesController::class, 'index']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ***************************************************//
// ** Entertainment page and everything associated ** //
// ***************************************************//

// Main entertainment page that lists everything
Route::get('/entertainment', [PagesController::class, 'entertainment'])->name('entertainment.index');

// For search functionality
Route::get('/entertainment/search', [EntertainmentController::class, 'search'])->name('entertainment.search');

// Show individual attractions
Route::get('/entertainment/{slug}', [EntertainmentController::class, 'show'])->name('entertainment.show');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **      About page      **//
// **************************//

Route::get('/about', [PagesController::class, 'about']);
Route::get('/about/{alias}', [PagesController::class, 'teamMember']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **       Reviews        **//
// **************************//

Route::resource('reviews', ReviewsController::class);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **       Dining         **//
// **************************//

Route::get('/dining', [PagesController::class, 'dining'])->name('dining');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **        Rooms         **//
// **************************//

// List of rooms
Route::get('/rooms', [PagesController::class, 'rooms'])->name('rooms');
// Individual room
Route::get('/rooms/{slug}', [PagesController::class, 'showRoom'])->name('rooms.show');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **        Events        **//
// **************************//

// Events index
Route::get('/events', [PagesController::class, 'events'])->name('events');
// Upcoming events
Route::get('/events/upcoming-events', [PagesController::class, 'upcomingEvents']);
// Venues
Route::get('/events/venue-hire', [PagesController::class, 'venues'])->name('venues');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **       Pool/Spa       **//
// **************************//

Route::get('/pool-and-spa', [PagesController::class, 'pool']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **        Coffee        **//
// **************************//

Route::get('/saythanks', [PagesController::class, 'saythanks']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **        Auth          **//
// **************************//
Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Dashboard route, shows the main dashboard page
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

// *******************************//
// **        Dash window        **//
// *******************************//

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/upcoming-reservations', [App\Http\Controllers\Dashboard\UpcomingReservationsController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/past-reservations', [App\Http\Controllers\Dashboard\PastReservationsController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/payments', [App\Http\Controllers\Dashboard\PaymentRecordsController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/reviews', [App\Http\Controllers\Dashboard\ReviewRecordsController::class, 'index']);
});

// ************************//
// **        News        **//
// ************************//

Route::middleware('auth')
    ->prefix('dashboard/news')
    ->controller(NewsController::class)
    ->group(function () {

        Route::get('/', 'index');

        Route::prefix('today')->group(function () {
            Route::get('new-goliathon-evidence-found', 'article1');
            Route::get('top-5-holiday-destinations-3002', 'article2');
            Route::get('exclusive-interview-with-doctor-mobium', 'article3');
            Route::get('xeroxtron-recalls-issued', 'article4');
            Route::get('notice-board', 'article5');
        });
    });

// ************************//
// **     Converter      **//
// ************************//

Route::middleware('auth')
    ->prefix('dashboard')
    ->controller(ConverterController::class)
    ->group(function () {

        Route::get('/currency-converter', 'index');
        Route::post('/currency-converter', 'index');

        Route::get('/galactic-currency-converter', 'additional');
        Route::post('/galactic-currency-converter', 'additional');

    });

// ************************//
// **       Promos       **//
// ************************//

Route::middleware('auth')
    ->prefix('dashboard')
    ->controller(PromosController::class)
    ->group(function () {

        // Main promos page
        Route::get('/promos', 'index');

        // Giveaway page
        Route::get('/promos/monthly-giveaway', 'monthlyGiveaway');

    });


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// ** Reservations Routes ** //
// **************************//
Route::get('/reservations/create', [ReservationsController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationsController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{id}/confirmation', [ReservationsController::class, 'confirmation'])->name('reservations.confirmation');
Route::delete('/reservations/{id}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **       Errors        ** //
// **************************//

// Faux error
Route::get('/extranet-portal', [PagesController::class, 'extranetConnect']);

// 404 and others to be added later

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// **************************//
// **        Blimby       ** //
// **************************//

Route::post('/blimby-chat', [\App\Http\Controllers\BlimbyController::class, 'chat']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
