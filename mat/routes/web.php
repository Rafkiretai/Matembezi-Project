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

// booking view
Route::get('/booking', function () {
    return view('booking');
})->name('malipo');

// car hire view
Route::get('/carHire', function () {
    return view('carHire');
});

// Hotels view
Route::get('/hotel', function () {
    return view('Hotels');
});

// Safari packages view
Route::get('/safaris', function () {
    return view('safaris');
});

// enquires view
Route::get('/enquires', function () {
    return view('enquires');
})->name('question');

// addSafaris view
Route::get('/addSafaris', function () {
    return view('addSafaris');
})->name('safaris');

// addHotel view
Route::get('/addHotel', function () {
    return view('addHotel');
})->name('hoteli');

// addCar view
Route::get('/addCar', function () {
    return view('addCar');
})->name('gari');



// post bookings to the DB
Route::post('/booking/form', 'paymentsForm@pushForm')->name('mapesa');

//post enquiries to the DB
Route::post('/enquiries/form','enquiryCont@pushEnquiries')->name('maswali');

//add Safaris
Route::post('/addSafaris/form','addsafarisCont@pushSafaris')->name('safiri');

//add hotel
Route::post('/addHotel/form','addhotelCont@pushhotel')->name('dishi');

//add car
Route::post('/addCar/form','addcarCont@pushCars')->name('dinga');



//pulling payments from DB
Route::get('/viewpayments','paymentsForm@pullPayments')->name('vuta');

//pulling enquiries from DB
Route::get('/viewenquiries','enquiryCont@pullEnquiries')->name('noma');

// pull safaris from DB
Route::get('/safaris','addsafarisCont@pullSafaris')->name('tembea');



//delete payment
Route::get('/viewpayments/click_delete/{id}', 'paymentsForm@deletePayments')->name('futa');

//delete Enquiry
Route::get('/viewenquiries/click_delete/{id}', 'enquiryCont@deleteEnquiries')->name('rusha');


//Auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

