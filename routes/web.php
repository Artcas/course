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
Route::domain(env('NOVA_DOMAIN_NAME'))->group(function () {
    Route::middleware('auth')->namespace('admin')->group(function () {
    });
});

Route::domain(env('WEBSITE_URL'))->group(function() {
    Route::get('/{any}', function () { return view('app');})->where('any', '^(?!api\/)[\/\w\.-]*');
});


Route::domain(env('CMS_URL'))->group(function() {
    Route::get('/',  [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/sign-up', [\App\Http\Controllers\HomeController::class, 'signUp'])->name('signUp');
    Route::post('sign-up', [\App\Http\Controllers\Auth\AuthController::class, 'signUp'])->name('postSignUp');
    //
    Route::get('sign-in', [\App\Http\Controllers\HomeController::class, 'signIn'])->name('signIn');
    Route::post('sign-in', [\App\Http\Controllers\Auth\AuthController::class, 'signIn'])->name('postSignIn');
    //
    Route::get('forgot-password', [\App\Http\Controllers\HomeController::class, 'forgotPassword'])->name('forgotPassword');
    Route::get('account/confirmation', [\App\Http\Controllers\HomeController::class, 'confirmOtp'])->name('confirmOtp');
    Route::post('account/confirmation', [\App\Http\Controllers\Auth\AuthController::class, 'confirmOtp'])->name('postConfirmOtp');
    Route::middleware('otp_verified')->group(function() {
        Route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    });


});







