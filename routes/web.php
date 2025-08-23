<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
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

Route::post('sendMessage', [PanierController::class, 'sendMessage'])->name('sendMessage');
Route::post('addNewsletter', [PanierController::class, 'addNewsletter'])->name('addNewsletter');

Route::get('home', [CategorieController::class, 'home'])->name('home');
Route::get('about', [CategorieController::class, 'about'])->name('about');
Route::get('expPhoto', [CategorieController::class, 'expPhoto'])->name('expPhoto');
Route::get('expSon', [CategorieController::class, 'expSon'])->name('expSon');
Route::get('expVideo', [CategorieController::class, 'expVideo'])->name('expVideo');
Route::get('contact', [CategorieController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return redirect()->route('home');
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
