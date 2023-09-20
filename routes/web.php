<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShowController;
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

// & Route de contact
Route::get("/contact",[ContactController::class,"index"])->name("contact.index");

// ! Route home
Route::get("/",[HomeController::class,"index"])->name("home.index");

// ! Route shop
Route::get("/shop",[ShopController::class,"index"])->name("shop.index");

// !Route show
Route::get("/show",[ShowController::class,"index"])->name("show.index");

// ! Route panier
Route::get("/panier",[PanierController::class,"index"])->name("panier.index");

// ! Route login
// Route::get("/login",[login])

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
