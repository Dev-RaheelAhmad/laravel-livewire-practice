<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Post\CreatePost;
use App\Livewire\Post\ShowPost;
use App\Livewire\Post\UpdatePost;
use App\Livewire\Post\DeletePost;
use App\Livewire\Post\Posts;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', Posts::class);
Route::get('/create-post', CreatePost::class);
Route::get('/show-post/{id}', ShowPost::class);
Route::get('/update-post', UpdatePost::class);
Route::get('/delete-post', DeletePost::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
