<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register-client', [App\Http\Controllers\RegisterCLientController::class, 'index'])->name('reg-client');
Route::post('/register-client', [App\Http\Controllers\RegisterCLientController::class, 'store']);


//ADDRESSES
Route::get('/address/provinces', [App\Http\Controllers\AddressController::class, 'provinces']);
Route::get('/address/cities/{provcode}', [App\Http\Controllers\AddressController::class, 'cities']);
Route::get('/address/barangays/{citycode}', [App\Http\Controllers\AddressController::class, 'barangays']);


Route::get('/register-owner', [App\Http\Controllers\RegisterOwnerController::class, 'index'])->name('reg-owner');
Route::post('/register-owner', [App\Http\Controllers\RegisterOwnerController::class, 'store']);


//client
Route::get('/client-home', [App\Http\Controllers\Client\ClientHomeController::class, 'index']);

Route::get('/session', function(){
    return Session::all();
});

Route::get('/logout', function(){
    // return Session::all();
   Auth::logout();
});


Route::get('/client-reservation', [App\Http\Controllers\Client\ClientReservationController::class, 'index']);

Route::get('/client-account-panel', [App\Http\Controllers\Client\ClientAccountPanelController::class, 'index']);
Route::post('/client-account-panel', [App\Http\Controllers\Client\ClientAccountPanelController::class, 'update']);

Route::get('/client-change-password', [App\Http\Controllers\Client\ClientChangePasswordController::class, 'index']);
Route::post('/client-change-password', [App\Http\Controllers\Client\ClientChangePasswordController::class, 'changePasword']);

Route::get('/client-boarding-house-info', [App\Http\Controllers\Client\ClientBoardingHouseInfoController::class, 'index']);

//owner
Route::get('/dashboard', [App\Http\Controllers\Owner\DashboardController::class, 'index']);
Route::get('/dashboard-bhouse', [App\Http\Controllers\Owner\DashboardBhouseController::class, 'index']);
Route::get('/bhouse-create', [App\Http\Controllers\Owner\DashboardBhouseController::class, 'index1']);
Route::get('/bhouse-create-bed', [App\Http\Controllers\Owner\DashboardBhouseController::class, 'index2']);


