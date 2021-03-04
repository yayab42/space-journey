<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



//route page d'accueil
Route::get('/', [HomeController::class, 'index']);
//Route d'un produit précis
Route::get('product/{product}',[ProductController::class,'show']);
//Route pour populer la session du panier
Route::post('cart',[CartController::class,'store']);
//Route pour la vue du panier construire le panier grâce à la session
Route::get('cart' , [CartController::class,'index']);
//Route pour modifier le panier
Route::put('cart',[CartController::class, 'update'])
    ->name('cart.update');
//Route pour supprimer le panier
Route::delete('cart',[CartController::class, 'delete'])
    ->name('cartDelete');
Route::post('cart/destroy',[CartController::class, 'destroy']);


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
