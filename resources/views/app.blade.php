<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;800&display=swap" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <title>Space Journey</title>
</head>

<body>
<header class="background-black">
    <div class="container-fluid background-black">

        <nav class="navbar navbar-expand-lg navbar-light row">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCenteredExample"
                    aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-lg-4 justify-content-around" id="navbarCenteredExample">
                <div class="nav-item">
                    <a href="/product/10" class="img-hover-zoom">
                        <img class="nav-link" src="/img/shop.svg" alt="shop">
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/" class="img-hover-zoom">
                        <img class="nav-link" src="/img/aboutus.svg" alt="about">
                    </a>
                </div>
            </div>
            <div class=" col-4">
                <a href="/" class="img-hover-zoom">

                    <img class="nav-link img-fluid" src="/img/logo.svg" alt="logo">
                </a>

            </div>
            <div class="collapse navbar-collapse col-lg-4 justify-content-around" id="navbarCenteredExample">
                <div class="nav-item">
                    <a href="/login" class="img-hover-zoom">
                        <img class="nav-link" src="/img/login.svg" alt="login">
                    </a>
                    @if(Auth::check())
                    <p>Bonjour {{Auth::user()['name']}}</p>
                    @else
                        <p>Vou zête pas connecT</p>
                    @endif
                </div>
                <div class="nav-item">
                    <a href="/cart" class="img-hover-zoom">
                        <img class="nav-link" src="/img/Panier.svg" alt="panier">
                    </a>
                </div>
            </div>
        </nav>
    </div>


</header>


@yield('content')


<footer class="background-grey">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div><a href="#" class="text-dark">Mentions légals</a></div>
                <div><a href="#" class="text-dark">Conditions général de vente</a></div>
                <a href="#" class="text-dark">Nous contacter</a>
                <h4 class="text-center text-dark">Copyright</h4>
                <img src="" alt="">
            </div>

            <div class="col-lg-6 col-12">
                <h4 class="text-center text-dark">Partenaires</h4>
                <div class="row">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>

            </div>
        </div>

    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


</body>

</html>
