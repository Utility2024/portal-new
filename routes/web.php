<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Http\Controllers\Auth\GoogleController;

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
    return view('landing_page');
});

Route::middleware([PreventRequestsDuringMaintenance::class])->group(function () {
    Route::get('/', function () {
        return view('landing_page');
    });
});

Route::group(['middleware' => 'redirect.if.not.installed'], function () {
    Route::get('/', function () {
        return view('landing_page');
    });
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]) 
    ->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
