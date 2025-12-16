<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::view('/sobre-nosotros', 'pages.about')->name('about');
Route::view('/faqs', 'pages.faqs')->name('faqs');

Route::prefix('productos')->name('products.')->group(function () {
    Route::view('/', 'pages.products.index')->name('index');
    Route::view('/hb2', 'pages.products.hb2')->name('hb2');
    Route::view('/hb4', 'pages.products.hb4')->name('hb4');
    Route::view('/hb6', 'pages.products.hb6')->name('hb6');
    Route::view('/hb8', 'pages.products.hb8')->name('hb8');
    Route::view('/inodoro', 'pages.products.toilet')->name('toilet');
});

use App\Http\Controllers\VideoController;
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');

use App\Http\Controllers\CampaignController;
Route::post('/contact/submit', [CampaignController::class, 'submit'])->name('contact.submit');
Route::get('/propuesta', [CampaignController::class, 'propuesta'])->name('campaign.propuesta');
Route::get('/{slug}', [CampaignController::class, 'show'])->name('campaign.show');

