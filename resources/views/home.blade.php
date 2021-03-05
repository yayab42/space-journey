@extends('app')
@section('content')
<main>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/caroussel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/caroussel2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/caroussel3.jpg" alt="Third slide">
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


        <h1 class="text-center pb-5">Nos destinations</h1>
        <p class="text-justify pb-5 ">Hello jeune terrien ! Vous êtes un backpacker de l’extrème et vous avez soif
            d’aventure ? Vous trouvez les destinations terriennes fades ?
            <br> Découvrez notrer selection de voyage dans les contrès les plus incroyables de la galaxie.
        </p>


        <div class="row">
            @forelse ($products as $row)
                <div class="col-lg-6">
                    <article>
                        <header>
                            <img src="" alt="">
                        </header>
                        <a href="#"><h4 class="text-center">{{ $row->title }}</h4></a>
                    </article>
                </div>
            @empty
                <p>No products</p>
            @endforelse

        </div>


        <div class="row">
            <div class="col-6">
                <img src="" alt="produit à la une">
            </div>
            <div class="col-6">
                <img src="" alt="black friday">
                <h4>CAT 100 CAT</h4>
                <a href="" class="decouvrir-btn">Découvrir</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img src="" alt="destination à la une 2">
            </div>
            <div class="col-12 text-center pt-2 pb-5">
                <a href="" class="">Découvrir</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center pt-5 pb-5">
                <a href="" class="">Découvrez toutes nos destinations !</a>
            </div>
        </div>


        <h1 class="text-center pt-5 pb-5">Voyagez les yeux fermés</h1>

        <div class="row">
            <div class="col-lg-3 col-6">
                <img src="/img/love.svg" alt="">
                <p class="text-center">
                    18% de nos acheteurs satisfaits
                </p>
            </div>

            <div class="col-lg-3 col-6">
                <img src="/img/bitcoin.svg" alt="">
                <p class="text-center">
                    Paiement en jeton spatial sécurié </p>
            </div>

            <div class="col-lg-3 col-6">
                <img src="/img/green.svg" alt="">
                <p class="text-center">
                    Fusés respectueuses de la galaxie </p>
            </div>

            <div class="col-lg-3 col-6">
                <img src="/img/safe.svg" alt="" class="img-fluid">
                <p class="text-center">
                    Seulement 58% de taux d’accidents </p>
            </div>
        </div>

        <h1 class="text-center pb-5 pt-5">Nos outils</h1>
        <p class="text-center">Voyager dans l’espace c’est bien mais survire c’est mieux ! L'espace est rempli de
            créature vivantes et bien souvent malveillantes... Pensez
            bien à acheter nos outils pour pouvoir vous en sortir et profiter pleinement de votre
            aventure !
        </p>


        <div class="row">
            <div class="col-12">
                <a href="#"><img src="" alt=""></a>
            </div>

            <div class="col-6">
                <a href="#"><img src="" alt=""></a>
            </div>
            <div class="col-6">
                <a href="#"><img src="" alt=""></a>
            </div>
            <div class="col-12 text-center pt-5 pb-5">
                <a href="" class="">Découvrez toutes nos destinations !</a>
            </div>
        </div>

    </div>

</main>

@endsection
