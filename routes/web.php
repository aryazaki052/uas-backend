<?php

use App\Http\Controllers\BaliTourController;
use App\Http\Controllers\BaliTracking;
use App\Http\Controllers\BaliTransport;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\TransportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.landing-page.content');
});
Route::get('/detail', function () {
    return view('front.tour.detail');
});
Route::resource('/balitrack', BaliTracking::class);
Route::resource('/balitransport', BaliTransport::class);
Route::resource('/balitour', BaliTourController::class);
Route::get('/balitour/{id}', [BaliTourController::class, 'show'])->name('balitour.show');
// Route::get('/balitransport', function () {
//     return view('front.transport.index');
// });
// Route::get('/balitour', function () {
//     return view('front.tour.tour');
// });




Auth::routes();



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/tracking', [tracking::class, 'index'])->name('tracking');
    Route::resource('/tracking', TrackingController::class);
    Route::resource('/transport', TransportController::class);
    Route::resource('/tour', TourController::class);
    // Route::resource('/artikel', ArtikelController::class);
    // Route::resource('/slide', SlideController::class);
    // Route::resource('/pengurus', PengurusController::class);
    // Route::resource('/proker', prokerController::class);
    // Route::get('/admin/saran', [SaranController::class, 'index'])->name('saran.index');
    

});
