@extends('app')

@section('content')
<main>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container pt-5 pb-5">


        <h1 class="text-center pb-5 img-hover-zoom">{{$product->title}}</h1>

        <div class="row">
            <div class="col-lg-6">
                <img src="" alt="">
            </div>

            <div class="col-lg-6">
                <p>{{$product->description}}
                </p>
                <p>{{$product->price_with_vat}} €</p>
                <form action="/cart" method="POST">
                    @csrf
                    <div class="form-group">

                        <label for="quantity">Quantité</label>
                        <select name="quantity" id="quantity">
                            <option value="">Chosir</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" value="{{$product->id}}" name="id" >
                        <input type="submit" value="Ajouter au panier">
                    </div>
                </form>

            </div>

        </div>

    </div>
</main>
@endsection
