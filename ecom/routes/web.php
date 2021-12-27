<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.shop');
});

Route::get('shop', [HomeController::class, 'shop']);

Route::get('products', function() {
    return view('front.shop');
});

Route::get('about', function() {
    return view('front.shop');
});

Route::get('contact', [HomeController::class, 'contact'])->name('contactus');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']],
    function() {
        Route::get('/', function() {
            return view('admin.index');
        })->name('admin.index');

        //Route::POST('admin/store', [AdminController::class, 'store']);

        //Route::get('/admin', [AdminController::class, 'index']);

        Route::resource('product', ProductsController::class);
    }
);
