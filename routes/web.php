<?php

use App\Livewire\Products\ProductCreate;
use App\Livewire\Products\ProductEdit;
use App\Livewire\Products\ProductIndex;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('/products', ProductIndex::class)->name('products.index'); 
    Route::get('/products/create', ProductCreate::class)->name('products.create');
    Route::get('/products/{product}/edit', ProductEdit::class)->name('products.edit');
    
    Route::get('/main-banner', App\Livewire\MainBanner\MainIndex::class)->name('main-banner.index');
    Route::get('/main-banner/edit', App\Livewire\MainBanner\MainEdit::class)->name('main-banner.edit');
});

require __DIR__.'/auth.php';
