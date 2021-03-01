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
                    <a href="/" class="img-hover-zoom">
                        <img class="nav-link" src="/img/shop.svg" alt="shop">
                    </a>
                </div>
                <div class="nav-item">
                    <a href="" class="img-hover-zoom">
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
                    <a href="" class="img-hover-zoom">
                        <img class="nav-link" src="/img/login.svg" alt="login">
                    </a>
                </div>
                <div class="nav-item">
                    <a href="" class="img-hover-zoom">
                        <img class="nav-link" src="/img/Panier.svg" alt="panier">
                    </a>
                </div>
            </div>
        </nav>
    </div>


</header>

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
                <form action="#" method="POST">
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
                        <input type="submit" value="Ajouter au panier">
                    </div>
                </form>

            </div>

        </div>
</main>


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

<?PHP

dd($product);

?>
