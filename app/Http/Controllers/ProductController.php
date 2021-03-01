<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class ProductController extends Controller

{

    public function show(Product $product)
    {
        return view('product', ['product' => $product]);
    }

}




