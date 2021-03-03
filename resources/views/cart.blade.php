@extends('app')
@section('content')
    <div class="container">
        <h1 class="text-dark">PANIER</h1>
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
            @if($totalPriceCart==0)
                <h1 class="text-dark">Votre panier est vide :(</h1>
            @elseif(!empty($cartArray))
                @foreach($cartArray as $key => $value)

                    <tr>
                        <td>Image</td>
                        <td>
                            {{$value['product']->title}}
                        </td>
                        <td>
                            {{$value['product']->PriceWithVat}} €
                        </td>
                        <td>
                            <form method="post" action="/cartUpdate">
                                @csrf
                                <input type="hidden" value="{{$value['product']->id}}" name="id">
                                <input type="number" id="quantity" name="quantity" min="0"
                                       value=" {{$value['quantity']}}" placeholder="{{$value['quantity']}}">
                                <input name="modifier" id="modifier" type="submit" class="btn btn-info"
                                       value="Modifier">
                            </form>
                        </td>

                        <td>
                            {{$value['totalPriceWithVat']}} €
                        </td>
                    </tr>
                @endforeach
            @endif
            <h1></h1>
            </tbody>
        </table>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-2">
                    <p class="text-dark">
                        Total : {{$totalPriceCart}} €
                    </p>
                    <form action="" method="post">
                        <input class="btn btn-success" type="button" value="Valider le panier" name="submitCart">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
