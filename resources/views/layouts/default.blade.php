<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auto-école | Accueil</title>
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}" />
    @livewireStyles()
</head>

<body>
    <header class="header">
        <div class="top-bar fluid-container">
            <div class="top-bar__left">
                <div class="phone">
                    <i class="fa fa-phone"></i>
                    +228 98647306
                </div>
                <div class="address"><i class="fa fa-map"></i>Lomé Togo</div>
            </div>
            <div class="top-bar__right">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <nav class="header__nav fluid-container">
            <div class="nav__left">
                <div class="nav-logo">
                    <h1>AutoPlus</h1>
                    <p>Conduire prudement / Obtenir votre permis</p>
                </div>
                <div class="nav__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <ul class="nav-items">
                <li><a href="{{ route("home") }}">Accueil</a></li>
                <li><a href="{{ route("packages") }}">Nos Forfait</a></li>
                <li><a href="{{ route("about") }}">A Propos</a></li>
                <li><a href="{{ route("contact") }}">Nous Contacter</a></li>
            </ul>
        </nav>
    </header>

    {{ $slot }}

    <footer class="footer fluid-container">
        <div class="footer__col">
            <h1 class="footer__logo">AutoPlus</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
                laboriosam libero repellendus dolore maiores animi.
            </p>
        </div>
        <div class="footer__col">
            <h1 class="footer__title">Navigation</h1>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Nos Packages</a></li>
                <li><a href="#">Nous Contacter</a></li>
                <li><a href="#">A Propos</a></li>
            </ul>
        </div>
        <div class="footer__col">
            <div class="footer__credit">
                © Copyright 2021<span> AutoPlus</span>. Tout droit réservé.
            </div>
            <div class="footer__social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>
    @livewireScripts()
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
