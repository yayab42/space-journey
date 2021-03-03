<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Product $product)
    {
        // Récupération de l''id' et 'quantity' stocké dans session
        $cart = session('cart');
        $cartArray = [];
        $totalPriceCart = 0;

        foreach ($cart as $id => $qte) {
            // Récupération d'un article dans la BDD
            $product = Product::find($id);
            // Calcul du prix total d'une ligne du panier
            $totalPriceWithVat = $qte * $product->PriceWithVat;
            // Construction du panier
            $cartArray[] = [
                'product' => $product,
                'quantity' => $qte,
                'totalPriceWithVat' => $totalPriceWithVat,
            ];

            // Calcul du prix total du panier
            $totalPriceCart += $totalPriceWithVat;
        }

        // Transmission a la vue Cart du tableau 'cartArray' et du calcul d prix total panier
        return view('cart', ['cartArray' => $cartArray, 'totalPriceCart' => $totalPriceCart]);

    }

    public function initCart()
    {
        //
    }

    public function store(Request $request)
    {

        $id = $request->input('id');
        $quantity = $request->input('quantity');

        $cart = session('cart');

        if (isset($cart[$id])) {
            $cart[$id] += $quantity;
        } else {
            $cart[$id] = $quantity;
        }

        session()->put('cart', $cart);
        var_dump(session('cart'));

        return redirect()->action([CartController::class, 'index']);
    }

    public function addToCart($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show()
    {
        //
    }
}




