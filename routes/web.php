<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/klant/dashboard', 'dashboards\CustomerController@index');
Route::get('/klant/partners/overzicht', 'dashboards\CustomerController@overzicht');
Route::get('/klant/partners/offers', 'dashboards\CustomerController@offers');
Route::get('/klant/offers/overzicht/{id}', 'dashboards\CustomerController@show');

Route::get('/klant/producten', 'dashboards\CustomerController@producten');

Route::get('/klant/winkelwagen', 'dashboards\CustomerController@cart');

Route::get('/klant/briefings/opdracht/{id}', 'dashboards\CustomerController@opdracht');
Route::get('/klant/briefings/opdrachten', 'dashboards\CustomerController@opdrachten');
Route::post('/klant/briefings/opdracht/aanmaken', 'dashboards\CustomerController@create_opdracht')->name('CreateBriefing');

Route::get('/klant/orders', 'dashboards\CustomerController@orders');

Route::post('/at/to/cart/{id}', 'dashboards\CustomerController@add_cart')->name('CreateCart');

Route::get('/cart/remove/{id}', 'dashboards\CustomerController@destroy');

Route::post('order/checkout/order/now', 'dashboards\CustomerController@checkout')->name('checkout');

Route::get('/partner/dashboard', 'dashboards\PartnerController@index');
Route::get('/partner/offers/overzicht', 'dashboards\PartnerController@OfferOverzicht');
Route::get('/partner/offers/maken', 'dashboards\PartnerController@OfferCreate');
Route::get('/partner/offers/overzicht/{id}', 'dashboards\PartnerController@show');
Route::get('/partner/offers/overzicht/edit/{id}', 'dashboards\PartnerController@edit');
Route::get('/partner/offer/verwijder/{id}', 'dashboards\PartnerController@destroy');
Route::put('/partner/offers/overzicht/online/{id}', 'dashboards\PartnerController@online');
Route::put('/partner/offers/overzicht/offline/{id}', 'dashboards\PartnerController@offline');

Route::get('/partner/profiel', 'ProfielController@index');
Route::post('/partner/profiel/create/betaling/now', 'ProfielController@store')->name('CreateBetaling');
Route::put('/partner/Profile-Personal/{id}', 'ProfielController@update');
Route::put('/partner/Profile-image/{id}', 'ProfielController@image');
Route::put('/partner/Profile-Betaling/{id}', 'ProfielController@updaten');






Route::post('/partner/offers/maken/create/offers/now', 'dashboards\PartnerController@store')->name('CreateOffer');;






// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register/klant', 'Auth\RegisterController@showRegistrationForm');
Route::post('register/make/klant', 'Auth\RegisterController@register')->name('klant-register');

Route::get('/register/partner', 'Auth\RegisterController@showSecondRegistrationForm');
Route::post('register/make/partner', 'Auth\SecondRegisterController@register')->name('partner-register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');