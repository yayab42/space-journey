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
                <th scope="col"></th>
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
                            <form method="post" action="{{route('cart.update')}}">
                                @method('PUT')
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
                        <td>
                            <form action="{{route('cartDelete')}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" value="{{$value['product']->id}}" name="id" >
                                <input class="text-bold text-danger" type="submit" value="X">

                            </form></td>
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
                    <form action="/cart/destroy" method="post">
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Vider le panier">
                    </form>

                    <form action="/dashboard/cart" method="get">
                        @csrf
                        <input class="btn btn-success" type="submit" value="Valider le panier" name="submitCart">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
