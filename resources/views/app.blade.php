<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @show
</head>
<body>

        <header class="container-fluid">
       
       <div class="row">
           <div class="col-12 col-md-12 bg-light">
                   <span class="float-end">
                        <a href="https://www.linkedin.com/in/marine-vandenbussche-64801185" target="_blank" class="link-secondary"><i class="fa fa-linkedin-square fa-3x" ></i></a>
                        <a href="https://github.com/MarineVdb" target="_blank" class="link-secondary"><i class="fa fa-github-square fa-3x"> </i></a>
                   </span>
            </div>
       </div>
           
       <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <span class="navbar-brand d-lg-none" id="signature" href="#">Marine VDB</span>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  aria-current="page" href="/pricing">Tarifs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  aria-current="page" href="/contact">Contact</a>
                    </li>
                </ul>
                <span class="navbar-brand  d-none d-lg-inline" id="signature" href="#">Marine VDB</span>
                </div>
            </div>
        </nav>
   
       </header>


    @section('content')
        
    @show

    <footer class="container-fluid">
    <div id="footer" class=" bg-light">
            <!-- Reseaux sociaux sur mobile uniquement -->
            <div class="row text-center mt-4 mb-2 bg-light">
                <div class="col-12 d-md-none">
                <p class="d-inline reseaux col-6">Suivez-nous</p>
                <i class="col-3 fab fa-instagram-square d-inline fa-2x"></i>
                <i class="col-3 fab fa-facebook-square d-inline fa-2x"></i>
                </div>
            </div>


            <!-- Mentions -->
            <div class="row d-flex justify-content-around pt-3 mt-4 ">
                <!-- A propos -->
                <div class="col-12 col-md-2">
                    <ul class="list-unstyled">
                        <li class="text-uppercase">A propos de nous</li>
                        <li><a  class="text-secondary" href="/">Qui sommes-nous ?</a></li>
                        <li><a class="text-secondary" href="/">Conditions Générales de vente</a></li>
                        <li><a class="text-secondary" href="/">Politique de confidentialité</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-12 col-md-2">
                    <ul class="list-unstyled">
                        <li class="text-uppercase">Services</li>
                        <li><a class="text-secondary" href="/">Carte cadeau</a></li>
                        <li><a  class="text-secondary" href="/">Click & Collect</a></li>
                    </ul>
                </div>

                <!-- Commander en ligne -->
                <div class="col-12 col-md-2">
                    <ul class="list-unstyled">
                        <li class="text-uppercase">Commander en ligne</li>
                        <li><a class="text-secondary" href="/">Commande</a></li>
                        <li><a class="text-secondary" href="/">Livraison</a></li>
                        <li><a class="text-secondary" href="/">Retours</a></li>
                        <li><a class="text-secondary" href="/">Paiement</a></li>

                    </ul>
                </div>

                <!-- Aide et contact -->
                <div class="col-12 col-md-2">
                    <ul class="list-unstyled">
                        <li class="text-uppercase">Aide et Contact</li>
                        <li><a class="text-secondary" href="/">Notre boutique</a></li>
                        <li><a class="text-secondary" href="/">Contactez-nous</a></li>
                        <li><a class="text-secondary" href="/">FAQ</a></li>
                    </ul>
                </div>

                <!-- Reseaux sociaux Desktop -->
                <div class="col-12 col-md-2 d-none d-md-inline-block text-center align-self-center mb-5 rounded background-reseaux">
                    <p class="reseaux-desk">Suivez-nous</p>
                    <i class="fab fa-instagram-square fa-4x mb-2"></i>
                    <i class="fab fa-facebook-square fa-4x"></i>
                </div>
            </div>
        </div>
    </footer>

    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @show
</body>
</html>