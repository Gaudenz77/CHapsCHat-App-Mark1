<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\MyLibraryController;
use App\Http\Controllers\MyBlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/', function () {
    return view('playground');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blogoSphere', function () {
    return view('blogoSphere');
})->middleware(['auth', 'verified'])->name('blogoSphere');

Route::get('/blogoSphere/{id}', function () {
    return view('blogoSphere');
})->middleware(['auth', 'verified'])->name('blogoSphere');

Route::get('/knowledgeSphere', function () {
    return view('knowledgeSphere');
})->middleware(['auth', 'verified'])->name('knowledgeSphere');

/* Route::get('/blogoSphere', [ChatsController::class, 'blogoSphere']);
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/playground', [ChatsController::class, 'index']);

Route::get('/messages', [ChatsController::class, 'fetchMessages']);
Route::post('/messages', [ChatsController::class, 'sendMessage']);
Route::post('/messages', [ChatsController::class, 'sendMessage'])->name('messages.store');

/* Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/mylibrary', [MyLibraryController::class, 'index'])->name('mylibrary.index');
    Route::post('/mylibrary', [MyLibraryController::class, 'store'])->name('mylibrary.store');
    Route::delete('/mylibrary/{id}', [MyLibraryCo>ntroller::class, 'destroy'])->name('mylibrary.destroy');
    Route::get('/mylibrary/search', [MyLibraryController::class, 'search'])->name('mylibrary.search');
});*/

Route::get('/knowledgeSphere', function () {
    return view('knowledgeSphere');
})->middleware(['auth', 'verified'])->name('knowledgeSphere'); 


Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/mylibrary', [MyLibraryController::class, 'index'])->middleware('auth')->name('mylibrary.index');
Route::post('/mylibrary', [MyLibraryController::class, 'store'])->middleware('auth')->name('mylibrary.store');
Route::delete('/mylibrary/{id}', [MyLibraryController::class, 'destroy'])->name('mylibrary.destroy');
Route::post('/mylibrary', [MyLibraryController::class, 'store'])->name('mylibrary.store');

Route::get('/blogosphere', [MyBlogController::class, 'index'])->middleware('auth')->name('blogosphere.index');
Route::get('/blogosphere/create', [MyBlogController::class, 'create'])->name('blogosphere.create');
Route::post('/blogosphere', [MyBlogController::class, 'store'])->middleware('auth')->name('blogosphere.store');
Route::get('/blogosphere/{id}', [MyBlogController::class, 'show'])->name('blogosphere.show');
Route::get('/blogosphere/{id}/edit', [MyBlogController::class, 'edit'])->name('blogosphere.edit');
Route::put('/blogosphere/{id}', [MyBlogController::class, 'update'])->name('blogosphere.update');
Route::delete('/blogosphere/{id}', [MyBlogController::class, 'destroy'])->middleware('auth')->name('blogosphere.destroy');

});


