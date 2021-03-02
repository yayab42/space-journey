@extends('app')
@section('content')
    <div class="container">
        <h1>PANIER</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Titre</th>
                <th scope="col">Prix Unitaire</th>
                <th scope="col"> Quantité</th>
                <th scope="col"> Total</th>
            </tr>
            </thead>
            <tbody>
            {{--    Si $Session n'est pas vide alors on fait un foreach on parcourt le tableau avec toutes les données --}}
<?php var_dump(session('cart'))?>
            <tr>
                <td>Image</td>
                <td>
                    {{--            Le titre--}}
                </td>
                <td>
                    {{--            Prix du produit TTC--}}
                </td>
                <td>
                    {{--            Quantité --}}</td>
                <td>
                    {{--            Total d'un produit --}}</td>
            </tr>
            {{-- Fin du foreach--}}
            <h1></h1>
            </tbody>
        </table>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-2">
                    <p>
                        {{--                Total de tous les produits --}}
                    </p>
                    <form action="" method="post">
                        <input class="btn btn-success" type="button" value="Valider le panier" name="submitCart">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
