<?php

use App\Http\Controllers\adminAuth;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FunctionalityController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\profile;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\userAuth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'authentication/login');
Route::redirect('/login', 'authentication/login');
Route::redirect('/register', 'authentication/register');
Route::redirect('/reset', 'authentication/reset');
Route::redirect('/logout', 'authentication/logout');
Route::redirect('/dashboard', 'dashboard/index');
Route::prefix('/authentication')->group(function () {
    Route::get('/login', [userAuth::class, 'login'])->name('login');
    Route::post('/loginReq', [userAuth::class, 'loginReq'])->name('loginReq');

    Route::get('/register', [userAuth::class, 'register'])->name('register');
    Route::post('/registerReq', [userAuth::class, 'registerReq'])->name('registerReq');

    // user Created, Email Verification Notice
    Route::get('/email-verification', [userAuth::class, 'emailVerification'])->name('emailVerification');
    Route::get('/resendEmail', [userAuth::class, 'resendEmail'])->name('resendEmail');

    // Reset Password Request
    Route::get('/reset', [userAuth::class, 'resetPassword'])->name('resetPassword');
    Route::post('/resetPasswordReq', [userAuth::class, 'resetPasswordReq'])->name('resetPasswordReq');

    // Logout from System
    Route::get('/logout', [userAuth::class, 'logout'])->name('logout');
});
// user Click on Email from Their Email
Route::get('/verify/{token?}', [userAuth::class, 'verifyUserEmail'])->name('verifyUserEmail');
Route::get('/email-verified', [userAuth::class, 'emailVerified'])->name('emailVerified');

Route::get('/reset/{token?}', [userAuth::class, 'setPassword'])->name('setPassword');
Route::post('/setPasswordReq', [userAuth::class, 'setPasswordReq'])->name('setPasswordReq');
Route::get('/password-changed', [userAuth::class, 'passwordChanged'])->name('passwordChanged');




Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/index', [dashboard::class, 'index'])->name('dashboard');
    Route::get('/devices/working', [DeviceController::class, 'devicesWorking'])->name('devicesWorking');
    Route::get('/devices/refurbishing', [DeviceController::class, 'devicesRefurbishing'])->name('devicesRefurbishing');
    Route::get('/devices/motherboard', [DeviceController::class, 'devicesmotherboard'])->name('devicesmotherboard');
    Route::get('/devices/new', [DeviceController::class, 'devicesnew'])->name('devicesnew');
    Route::resource('support', SupportController::class);
    Route::get('/profile', [profile::class, 'index'])->name('profile');
    Route::post('/profile', [profile::class, 'profileReq'])->name('profileReq');
    Route::post('/changePasswordReq', [profile::class, 'changePasswordReq'])->name('changePasswordReq');

    Route::post('/orderReq', [OrderController::class, 'orderReq'])->name('orderReq');
    Route::post('/orderExistingReq', [OrderController::class, 'orderExistingReq'])->name('orderExistingReq');

    Route::get('/orders/drafts', [OrderController::class, 'draftsOrders'])->name('draftsOrders');
    Route::get('/orders/drafts/destory/{id}', [OrderController::class, 'OrdersDestory'])->name('OrdersDestory');

    Route::get('/order/{id}', [OrderController::class, 'orderShow'])->name('order.show');
    Route::get('/device/destory/{id}', [itemOrderController::class, 'deviceDestory'])->name('deviceDestory');
});


Route::prefix('admin')->group(function () {
    Route::get('/authenticate/login', [adminAuth::class, 'login'])->name('adminlogin');
    Route::post('/authenticate/login', [adminAuth::class, 'loginReq'])->name('adminLoginReq');
});



Route::prefix('admin/dashboard')->middleware(['admin'])->group(function () {
    Route::get('/index', [adminDashboard::class, 'index'])->name('adminDashboard');
    Route::get('/all-users', [adminDashboard::class, 'allUsers'])->name('allUsers');
    Route::get('/all-supports', [adminDashboard::class, 'allSupports'])->name('allSupports');


    Route::get('/addDevice', [DeviceController::class, 'addDevice'])->name('addDevice');
    Route::post('/addDevice', [DeviceController::class, 'addDeviceReq'])->name('addDeviceReq');

    Route::get('/addFunctionality', [FunctionalityController::class, 'addFunctionality'])->name('addFunctionality');
    Route::post('/addFunctionality', [FunctionalityController::class, 'addFunctionalityReq'])->name('addFunctionalityReq');

    Route::get('/addColors', [FunctionalityController::class, 'addColors'])->name('addColors');
    Route::post('/addColors', [FunctionalityController::class, 'addColorsReq'])->name('addColorsReq');

    Route::get('/addBoxes', [FunctionalityController::class, 'addBoxes'])->name('addBoxes');
    Route::post('/addBoxes', [FunctionalityController::class, 'addBoxesReq'])->name('addBoxesReq');
});
