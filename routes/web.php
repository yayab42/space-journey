<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('product/{product}',[ProductController::class,'show']);
Route::post('cart',[CartController::class,'store']);
<<<<<<< HEAD
Route::get('cart' , [CartController::class,'index']);
=======
Route::get('cart',[CartController::class,'show']);
//Route::get('addtocart/{id}' , [CartController::class,'addToCart']);
>>>>>>> 2229d81f8d8535073295381be718654134db6163

