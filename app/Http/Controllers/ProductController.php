<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller

{

public function show ($id){
$oneProduct = DB::table('products')
    ->select('title','description','price_ht','weight','vat')
    ->find($id);
    return view('product',['oneProduct' => $oneProduct]);
}

}
