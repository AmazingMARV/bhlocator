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
Route::resource('/dashboard', App\Http\Controllers\Owner\DashboardController::class);


Route::get('/dashboard-bhouse', [App\Http\Controllers\Owner\DashboardBhouseController::class, 'index']);
Route::get('/bhouse-create', [App\Http\Controllers\Owner\DashboardBhouseController::class, 'index1']);
Route::get('/bhouse-create-bed', [App\Http\Controllers\Owner\DashboardBhouseController::class, 'index2']);

Route::get('/owner-profile', [App\Http\Controllers\Owner\OwnerProfileController::class, 'index']);
Route::post('/owner-profile', [App\Http\Controllers\Owner\OwnerProfileController::class, 'update']);

Route::get('/owner-change-password', [App\Http\Controllers\Owner\OwnerChangePassword::class, 'index']);
Route::post('/owner-change-password', [App\Http\Controllers\Owner\OwnerChangePassword::class, 'changePasword']);

Route::get('/bhouse-view-bed/{id}', [App\Http\Controllers\Owner\BoardinghouseViewBedController::class, 'index']);

Route::get('/bhouse-view-bed/{id}/create', [App\Http\Controllers\Owner\BoardinghouseViewBedController::class, 'create']);
Route::post('/bhouse-view-bed/{id}/store', [App\Http\Controllers\Owner\BoardinghouseViewBedController::class, 'store']);

Route::get('/bhouse-edit-bed/{id}/edit', [App\Http\Controllers\Owner\BoardinghouseViewBedController::class, 'edit']);

Route::get('/fetch-bed', [App\Http\Controllers\Owner\BoardinghouseViewBedController::class, 'getBeds']);





//admin
Route::resource('/admin-dashboard', App\Http\Controllers\Admin\AdminDashboardController::class);
Route::resource('/admin-approve', App\Http\Controllers\Admin\AdminApproveController::class);
Route::put('/approve-account-owner/{id}', [App\Http\Controllers\Admin\AdminApproveController::class, 'approveAccountOwner']);
Route::put('/disapprove-account-owner/{id}', [App\Http\Controllers\Admin\AdminApproveController::class, 'disapproveAccountOwner']);

Route::get('/ajax-admin-approve', [App\Http\Controllers\Admin\AdminApproveController::class, 'getUsers']);
Route::get('/sample-user', [App\Http\Controllers\Admin\AdminDashboardController::class, 'getUsers']);
Route::get('/get-business-img/{id}', [App\Http\Controllers\Admin\AdminApproveController::class, 'getImg']);





//visitor
Route::get('/visitor-dashboard', [App\Http\Controllers\Visitor\VisitorDashboardController::class, 'index']);
Route::get('/visitor-browse-bh', [App\Http\Controllers\Visitor\VisitorDashboardController::class, 'index1']);


//pending accounts
Route::get('/owner-pending', [App\Http\Controllers\Owner\OwnerPendingAccountController::class, 'index']);
