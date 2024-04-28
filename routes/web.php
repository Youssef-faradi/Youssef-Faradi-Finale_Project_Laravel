<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $roles = DB::table('roles')->get();
    
        return view('welcome' , compact('roles'));
})->name("welcome");


Route::get('/search', function () {
    return view('search');
})->name("search");



Route::get('/search', [PropertyController::class, 'search'])->name('search');


Route::get('/owner', function () {
    if ( Auth::user()->role !== 'owner') {
        return redirect('error'); 
    }else{
    return view('owner');
    }
})->middleware(['auth', 'verified'])->name("owner");




Route::post('/properties/store', [PropertyController::class, 'store'])->name('Property.store');
Route::delete('/properties/destroy/{property}', [PropertyController::class, 'destroy'])->name('Property.destroy');
Route::put('/properties/{property}', [PropertyController::class, 'update'])->name('properties.update');



Route::get('/booking/{property}', [BookingController::class, 'index'])->middleware(['auth', 'verified'])->name("booking.index");

Route::post('/booking/store', [BookingController::class, 'store'])->name('bookings.store');

Route::get('/booking/show/{property}', [BookingController::class, 'show']);

Route::get('/home', function () {
    return view('home.home');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function(){
    return view("errors");
});

require __DIR__.'/auth.php';
