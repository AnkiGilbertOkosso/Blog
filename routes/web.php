<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

Route::get('/', [PageController::class, 'welcome']);
Route::get('/contact', [PageController::class, 'contact']);
// Route::resource('posts', PostController::class)->parameters([
//     'posts' => 'slug'
// ]);


Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class)->parameters(['posts' => 'slug']);
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
        ->name('comments.store');
    Route::resource('categories', CategoryController::class);

    Route::middleware(['check.post.owner'])->group(function () {
        Route::get('posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('posts/{slug}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('posts/{slug}', [PostController::class, 'destroy'])->name('posts.destroy');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::middleware('role:admin')->group(function () {
//         // Admin-specific routes
//         Route::get('/admin/dashboard', function () {
//             return view('admin.dashboard');
//         })->name('admin.dashboard');
//     });

//     Route::middleware('role:user')->group(function () {
//         // User-specific routes
//         Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//         Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//         Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     });
// });

require __DIR__ . '/auth.php';
