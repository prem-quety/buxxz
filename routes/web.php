<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('store.index');

Route::get('/listings', [StoreController::class, 'listings'])->name('store.listings');
Route::get('/categories', [StoreController::class, 'categories'])->name('store.categories');
Route::get('/shop-list', [StoreController::class, 'shopList'])->name('store.shoplist');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- Footer links (all pointing to StoreController@index for now) ---
Route::get('/privacy-policy', [StoreController::class, 'index'])->name('privacy'); // to-do: replace with Privacy page
Route::get('/terms-and-conditions', [StoreController::class, 'index'])->name('terms'); // to-do: replace with Terms page
Route::get('/returns', [StoreController::class, 'index'])->name('returns'); // to-do: replace with Returns page
Route::get('/contact', [StoreController::class, 'index'])->name('contact'); // to-do: replace with Contact page
Route::get('/news', [StoreController::class, 'index'])->name('news'); // to-do: replace with News page
Route::get('/sitemap', [StoreController::class, 'index'])->name('sitemap'); // to-do: replace with Sitemap page

// Newsletter subscribe
Route::post('/newsletter/subscribe', [StoreController::class, 'index'])->name('newsletter.subscribe'); // to-do: build NewsletterController

// Posts
Route::get('/posts/{id}', [StoreController::class, 'index'])->name('posts.show'); // to-do: build PostController

require __DIR__ . '/auth.php';
