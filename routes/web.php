<?php

use App\Http\Controllers\ContactController;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Labels;
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




Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/contacts', Contacts::class)->name('contacts');
    Route::get('/labels', Labels::class)->name('labels');
    // Route::post('/contacts', [Contact::class, 'search'])->name('contacts.search');
    // Route::get('/contacts/{slug}', [ContactController::class, 'show'])->name('contact');

    // Route::get('/entreprises', 'EntrepriseController@index')->name('entreprises');
    // Route::get('/entreprises/{slug}', 'EntrepriseController@show')->name('entreprise');
});

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
