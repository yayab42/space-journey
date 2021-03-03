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

//route page d'accueil
Route::get('/', [HomeController::class, 'index']);
//Route d'un produit précis
Route::get('product/{product}',[ProductController::class,'show']);
//Route pour populer la session du panier
Route::post('cart',[CartController::class,'store']);
//Route pour la vue du panier construire le panier grâce à la session
Route::get('cart' , [CartController::class,'index']);
//Route pour modifier le panier
Route::post('cartUpdate',[CartController::class, 'update']);
//Route pour supprimer le panier
Route::delete('cart',[CartController::class, 'delete'])
    ->name('cartDelete');
Route::post('cart/destroy',[CartController::class, 'destroy']);



