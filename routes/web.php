<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AvatarController;
use App\Http\Livewire\Contacts\Contact;
use App\Http\Livewire\Contacts\Contacts;
use App\Http\Livewire\Entreprises\Entreprise;
use App\Http\Livewire\Entreprises\Entreprises;
use App\Http\Livewire\User\ManageEssaiGratuit;
use App\Http\Livewire\User\MyFavoriteContacts;
use App\Http\Livewire\User\MyFavoriteEntreprises;
use App\Http\Livewire\User\PasswordUpdate;
use App\Http\Livewire\User\ProfileUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::post('delete-photo', function () {
    Storage::disk('artist_pictures')->delete('public/images/artists/default.jpeg');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/profile/update', ProfileUpdate::class)->name('profile-update');
    Route::get('/profile/password', PasswordUpdate::class)->name('password-update');
    Route::get('/profile/essaigratuit', ManageEssaiGratuit::class)->name('essai-gratuit');
    Route::get('/profile/favorite-contacts', MyFavoriteContacts::class)->name('favorite-contacts');
    Route::get('/profile/favorite-entreprises', MyFavoriteEntreprises::class)->name('favorite-entreprises');
    Route::get('/', function () {
        return view('welcome');
        // Storage::disk('artist_pictures')->delete('public/images/artists/default.jpeg');
        // Storage::disk('artist_pictures')->delete('public/images/artists/default.jpeg');

    });
    Route::get('/contacts', Contacts::class)->name('contacts');
    Route::get('/contacts/{contact}', Contact::class)->name('contact');
    Route::get('/entreprises', Entreprises::class)->name('entreprises');
    Route::get('/entreprises/{entreprise}', Entreprise::class)->name('entreprise');

    // Route::post('/contacts', [Contact::class, 'search'])->name('contacts.search');
    // Route::get('/contacts/{slug}', [ContactController::class, 'show'])->name('contact');

    // Route::get('/entreprises', 'EntrepriseController@index')->name('entreprises');
    // Route::get('/entreprises/{slug}', 'EntrepriseController@show')->name('entreprise');
});

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
