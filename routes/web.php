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

Route::get('/client-home', [App\Http\Controllers\Client\ClientHomeController::class, 'index']);



Route::get('/session', function(){
    return Session::all();
});
