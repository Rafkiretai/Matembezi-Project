<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// home page
Route::get('/', function () {
    return view('welcome');
});

// payments view
Route::get('/payment', function () {
    return view('payment');
})->name('malipo');

// car hire view
Route::get('/carHire', function () {
    return view('carHire');
});

// Hotels view
Route::get('/hotel', function () {
    return view('Hotels');
});


// post payments to the DB
Route::post('/payment/form', 'paymentsForm@pushForm')->name('mapesa');
