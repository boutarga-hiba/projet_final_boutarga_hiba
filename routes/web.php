<?php

use App\Http\Controllers\admin\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
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



// !Route show
// Route::get("/show",[ShowController::class,"index"])->name("product.show");

// !Product
Route::get("/show/{product}",[ProductController::class,"show"])->name("product.show");
// ! Route shop
Route::get("/shop", [ShopController::class, "index"])->name("shop.index");
Route::get('shop/category/{categoryId}', 'ShopController@showCategory')->name('shop.category');
Route::get('/shop/filter', [ShopController::class, 'showCategory'])->name('shop.filter');
Route::get('/shop/sort', [ShopController::class , "sort"])->name('shop.sort');

// ! Route panier
Route::get("/panier",[PanierController::class,"index"])->name("panier.index");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//& Route mailbox
Route::post("/backend/store/mailbox",[MailController::class,"store"])->name("mailbox.store");

// * subscribbe
Route::post("/envoiEmail" , [HomeController::class , 'envoiEmail'])->name("envoiEmail");

require __DIR__.'/auth.php';

// test
// Route::get('/shop',[ShopController::class , 'index'])->name("shop.index");

// Route::get('/shop/filter', [ShopController::class,'filterProducts'])->name('shop.filter');

// Route::get('/shop/sort', [ShopController::class , "sort"])->name('shop.sort');

route::middleware('auth','role:admin')->group(

    function(){
        Route::get("/product/backend",[ProductController::class,"index"])->name("product_back.index");

    }
);
