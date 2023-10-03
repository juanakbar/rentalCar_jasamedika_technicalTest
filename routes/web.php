<?php

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
    $data['title'] = "Login ";
    return view('auth.login', $data);
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('car', App\Http\Controllers\CarController::class)->middleware('auth');

Route::resource('brand', 'App\Http\Controllers\BrandController')->middleware('auth');

Route::resource('employee', 'App\Http\Controllers\EmployeeController')->middleware('auth');

Route::resource('client', 'App\Http\Controllers\ClientController')->middleware('auth');

Route::get('booking', ['as' => 'booking.index', 'uses' => 'App\Http\Controllers\BookingController@index'])->middleware('auth');

Route::get('list-member', 'App\Http\Controllers\BookingController@listMember')->middleware('auth');

Route::post('create-client', ['as' => 'create-client', 'uses' => 'App\Http\Controllers\BookingController@createClient'])->middleware('auth');

Route::post('booking/details', ['as' => 'booking.calculate', 'uses' => 'App\Http\Controllers\BookingController@calculate'])->middleware('auth');

Route::post('booking/process', ['as' => 'booking.process', 'uses' => 'App\Http\Controllers\BookingController@process'])->middleware('auth');

Route::get('returns', ['as' => 'returns.index', 'uses' => 'App\Http\Controllers\ReturnController@index'])->middleware('auth');

Route::get('returns/information', ['as' => 'returns.information', 'uses' => 'App\Http\Controllers\ReturnController@information'])->middleware('auth');

Route::post('returns/process', ['as' => 'returns.process', 'uses' => 'App\Http\Controllers\ReturnController@process'])->middleware('auth');

Route::get('reports/transaction', 'App\Http\Controllers\ReportController@index')->middleware('auth');
