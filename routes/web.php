<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    NewsController,
    FrontNewsController,
};

Route::get('/', function () {
    return view('welcome');
})->name('/');

// Route News & Event
Route::get('/news-event', [FrontNewsController::class, 'index'])->name('news-event');
Route::get('/news-event-detail/{new}', [FrontNewsController::class, 'show'])->name('news-event-detail');

// Route Afiliasi
Route::get('/vander-inti-energi', function () {
    return view('afiliasi.vander-inti-energi');
})->name('vander-inti-energi');

Route::get('/vander-training', function () {
    return view('afiliasi.vander-training');
})->name('vander-training');

Route::get('/vander-geolab', function () {
    return view('afiliasi.vander-geolab');
})->name('vander-geolab');

Route::get('/9t-coffee', function () {
    return view('afiliasi.9t-coffee');
})->name('9t-coffee');

// Route News
Route::resource('news', NewsController::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
