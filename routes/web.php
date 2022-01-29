<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    FrontController,
    NewsController,
    AffiliationController,
    AffiliationPhotoController,
    PartnerController,
    CategoryController,
};

// Beranda
Route::get('/', [FrontController::class, 'home'])->name('/');

// Route News & Event
Route::get('/news-event', [FrontController::class, 'listNewsAndEvent'])->name('news-event.list');
Route::get('/news-event/{news}', [FrontController::class, 'detailNewsAndEvent'])->name('news-event.detail');

// Profile Vandertech
Route::get('/profile-vandertech', function () {
    return view('detail-vanderteck');
})->name('profile-vandertech');

// Route Afiliasi
Route::get('/afiliasi/{affiliation}', [FrontController::class, 'detailAffiliation'])->name('afiliasi.detail');

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

// Admin
Route::middleware('auth')->prefix('d')->name('d.')->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    // News & Event
    Route::resource('news', NewsController::class);

    // Mitra / partners
    Route::resource('partner', PartnerController::class);
    
    // Kategori mitra
    Route::resource('category', CategoryController::class)->except('show');

    // Afiliasi
    Route::resource('affiliation', AffiliationController::class);
    // Afiliasi Photo
    Route::get('/affiliation/{affiliation}/photos/create', [AffiliationPhotoController::class, 'create'])->name('affiliation.photo.create');
    Route::post('/affiliation/{affiliation}/photos', [AffiliationPhotoController::class, 'store'])->name('affiliation.photo.store');
    Route::delete('/affiliation/{affiliation}/photos/{photo}', [AffiliationPhotoController::class, 'destroy'])->name('affiliation.photo.destroy');
});

require __DIR__.'/auth.php';
