<?php

use App\Http\Controllers\ContactController;
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




Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('/contacts/{slug}', [ContactController::class, 'show'])->name('contact');

    // Route::get('/entreprises', 'EntrepriseController@index')->name('entreprises');
    // Route::get('/entreprises/{slug}', 'EntrepriseController@show')->name('entreprise');
});

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
