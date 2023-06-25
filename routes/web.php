<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\MyLibraryController;
use App\Http\Controllers\MyBlogController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the
| "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/blogoSphere', function () {
    return view('blogoSphere');
})->name('blogoSphere');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/impressum', function () {
    return view('impressum');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/blogoSphere/{id}', function () {
        return view('blogoSphere');
    })->name('blogoSphere');

    Route::get('/knowledgeSphere', function () {
        return view('knowledgeSphere');
    })->name('knowledgeSphere');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mylibrary', [MyLibraryController::class, 'index'])->name('mylibrary.index');
    Route::post('/mylibrary', [MyLibraryController::class, 'store'])->name('mylibrary.store');
    Route::get('/mylibrary/{id}/edit', [MyLibraryController::class, 'edit'])->name('mylibrary.edit');
    Route::put('/mylibrary/{id}', [MyLibraryController::class, 'update'])->name('mylibrary.update');
    Route::delete('/mylibrary/{id}', [MyLibraryController::class, 'destroy'])->name('mylibrary.destroy');

    /* Route::get('/blogosphere', [MyBlogController::class, 'index'])->name('blogosphere.index'); */
    Route::get('/blogosphere/create', [MyBlogController::class, 'create'])->name('blogosphere.create');
    Route::post('/blogosphere', [MyBlogController::class, 'store'])->name('blogosphere.store');
    Route::get('/blogosphere/{id}', [MyBlogController::class, 'show'])->name('blogosphere.show');
    Route::get('/blogosphere/{id}/edit', [MyBlogController::class, 'edit'])->name('blogosphere.edit');
    Route::put('/blogosphere/{id}', [MyBlogController::class, 'update'])->name('blogosphere.update');
    Route::delete('/blogosphere/{id}', [MyBlogController::class, 'destroy'])->name('blogosphere.destroy');
});
Route::get('/blogosphere', [MyBlogController::class, 'index'])->name('blogosphere.index');

Route::middleware('auth')->group(function () {
    Route::get('/playground', [ChatsController::class, 'index']);
    Route::get('/messages', [ChatsController::class, 'fetchMessages']);
    Route::post('/messages', [ChatsController::class, 'sendMessage'])->name('messages.store');
    Route::delete('/messages/{messageId}', [ChatsController::class, 'destroy'])->name('messages.destroy');
});

require __DIR__.'/auth.php';