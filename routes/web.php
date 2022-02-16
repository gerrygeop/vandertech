<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    FrontController,
    NewsController,
    AffiliationController,
    AffiliationPhotoController,
    PartnerController,
    CategoryController,
    VanderteckController,
    UserController,
};

// Beranda
Route::get('/', [FrontController::class, 'home'])->name('/');

// Route News & Event
Route::get('/news-event', [FrontController::class, 'listNewsAndEvent'])->name('news-event.list');
Route::get('/news-event/{news}', [FrontController::class, 'detailNewsAndEvent'])->name('news-event.detail');

// Profile Vanderteck
Route::get('/profile-vanderteck', [FrontController::class, 'profileVanderteck'])->name('profile-vanderteck');

// Route Afiliasi
Route::get('/afiliasi/{affiliation}', [FrontController::class, 'detailAffiliation'])->name('afiliasi.detail');

// Dapur Admin
Route::middleware('auth')->prefix('d')->name('d.')->group(function() {

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [VanderteckController::class, 'dashboard'])->name('main');
        Route::get('/edit-profil', [VanderteckController::class, 'editProfile'])->name('edit-profile');
        Route::post('/update-profil', [VanderteckController::class, 'updateProfile'])->name('update-profile');
        
        Route::get('/edit-visi-misi', [VanderteckController::class, 'editVisiMisi'])->name('edit-visi-misi');
        Route::post('/update-visi-misi', [VanderteckController::class, 'updateVisiMisi'])->name('update-visi-misi');
        
        Route::post('/upload-foto-slide', [VanderteckController::class, 'uploadFotoSlide'])->name('upload-foto-slide');
        Route::delete('/destroy-foto-slide/{slide}', [VanderteckController::class, 'destroyFotoSlide'])->name('destroy-foto-slide');
    });

    // User profile
    Route::get('/setting/profil', [UserController::class, 'profileUser'])->name('setting.profile');
    Route::put('/setting/update/informasi', [UserController::class, 'updateInformasiUser'])->name('setting.update-informasi');
    Route::put('/setting/update/password', [UserController::class, 'updatePasswordUser'])->name('setting.update-password');

    // News & Event
    Route::resource('news', NewsController::class);

    // Mitra / partners
    Route::resource('partner', PartnerController::class)->except('show');
    
    // Kategori mitra
    Route::resource('category', CategoryController::class)->except('show');

    // Afiliasi
    Route::resource('affiliation', AffiliationController::class);

    // Pelatihan dilaksanakan
    Route::get('/affiliation/{affiliation}/training', [AffiliationController::class, 'tableTraining'])->name('affiliation.training.index');
    Route::get('/affiliation/{affiliation}/training/create', [AffiliationController::class, 'createTraining'])->name('affiliation.training.create');
    Route::get('/affiliation/{affiliation}/training/{$pelatihan}', [AffiliationController::class, 'editTraining'])->name('affiliation.training.edit');
    Route::post('/affiliation/{affiliation}/training/store', [AffiliationController::class, 'storeTraining'])->name('affiliation.training.store');
    Route::put('/affiliation/{affiliation}/training/update/{$pelatihan}', [AffiliationController::class, 'updateTraining'])->name('affiliation.training.update');
    Route::delete('/affiliation/training/destroy/{$pelatihan}', [AffiliationController::class, 'destroyTraining'])->name('affiliation.training.destroy');

    // Afiliasi Photo
    Route::get('/affiliation/{affiliation}/photos/create', [AffiliationPhotoController::class, 'create'])->name('affiliation.photo.create');
    Route::post('/affiliation/{affiliation}/photos', [AffiliationPhotoController::class, 'store'])->name('affiliation.photo.store');
    Route::delete('/affiliation/{affiliation}/photos/{photo}', [AffiliationPhotoController::class, 'destroy'])->name('affiliation.photo.destroy');
});

require __DIR__.'/auth.php';
