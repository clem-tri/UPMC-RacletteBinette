<header class="page-header">

    <!-- Logo Raclette et Binette + Barre de recherche -->
    <div class="row">
        <div class="col-md-4"><a href="{{route("home")}}"><img src="{{asset("storage/images/racetbin.png") }}" alt="Raclette et Binette" class="logorb"/></a></div>

        <div class=" col-md-4">
            <form class="search-form" style="padding-left:0; width:60%;" action="{{ route('search.result') }}" method="get" role="search">
                <div class="input-group" style="padding-top:14px; margin-top:40px;">
                    <input style="color:white; border-radius:20px; background-color:#68B42F" type="text" class="form-control" placeholder="Rechercher..." name="q">
                    <div class="input-group-btn">
                        <button style="position:absolute; right:0; border-color: transparent; background-color: transparent !important;" class="btn btn-primary" type="submit">
                            <span class="fa fa-search"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- 4 Mini onglets -->
        <div class="col-md-4">
            <div class="grid-inner">
                <ul class="headerLists" style="font-family:'Comfortaa';">

                    <li class="headerListsItems">
                            <img src="{{asset("storage/images/icones/carte_fidelite.png") }}" alt="Carte fidélité" />
                            <a style="font-size:9pt; color:black;" class="nav-link" href="{{ route('my-account.fidelite') }}">Carte fidélité</a>
                    </li>

                @guest()
                    <li class="headerListsItems">
                        <img src="{{asset("storage/images/icones/moncompte.png") }}" alt="Compte utilisateur" />
                        <a style="font-size:9pt; color:black;" class="nav-link" href="{{ route('login') }}">Se connecter</a>
                    </li>
                    @endguest()
                    @auth()
                        <li class="headerListsItems">
                            <img src="{{asset("storage/images/icones/moncompte.png") }}" alt="Compte utilisateur" />
                            <a style="font-size:9pt; color:black;" class="nav-link" href="{{ route('my-account.home') }}">Mon compte</a>
                        </li>
                        @endauth

                    {{--
                    <li>
                        <a class="headerListsItems" href="{{ route('cart.view') }}">
                            <img src="{{asset("storage/images/icones/moncompte.png") }}" alt="Compte utilisateur" />
                            <p class="headerListsItems_p">Mon compte</p>
                        </a>
                    </li>--}}

                    <li class="headerListsItems">
                            <img src="{{asset("storage/images/icones/panier.png") }}" alt="Mon panier" />
                            <a style="font-size:9pt; color:black;" class="nav-link" href="{{ route('cart.view') }}">Panier</a>
                    </li>

                    <li class="headerListsItems">
                            <img src="{{asset("storage/images/icones/caisse.png") }}" alt="Caisse" />
                            <a style="font-size:9pt; color:black;" class="nav-link" href="{{ route('checkout.index') }}">Caisse</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</header>










{{--<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="padding:0;">
    <div class="container">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item">
                <a class="nav-link" href="{{ route('chatter.home') }}">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('calendar.index') }}">Calendrier</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/avoredecommerce/"><i class="fab fa-facebook"></i> Facebook</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://twitter.com/avoredecommerce/"><i class="fab fa-twitter"></i> Twitter</a>
              </li>
        </ul>
        <ul class="navbar-nav">


            @guest()
           <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Se connecter </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Créer un compte</a>
            </li>
            @endguest()

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('cart.view') }}">Panier </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('checkout.index') }}">Caisse</a>
                </li>

        </ul>
    </div>
</nav>--}}

<header>
    <div class="container">
        <div class="row">
            {{--<div class="col-md-6">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span style="font-size: 32px; font-weight: 500; margin-top: 10px;">
                        <img src="{{ asset('vendor/tsdc-default/images/logo.svg') }}" alt="logo" class="logo">Chez Raclette et Binette
                    </span>
                </a>
            </div>--}}
            <div class="col-md-6">
                {{--<form class="navbar-form" action="{{ route('search.result') }}" method="get" role="search">
                    <div class="input-group" style="padding-top: 14px;">
                        <input type="text" class="form-control" placeholder="Chercher dans le magasin..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>--}}
            </div>
            <!--<div class="col-md-1">
                <a class="nav-link" href="http://demo.avored.website/cart/view">Cart (0)</a>
            </div>-->
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#avored-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="avored-navbar">
            <ul class="main-navbar navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("home")}}">Accueil</a>
                </li>
                @include('layouts.menu-tree',['menus' => $menus])
                <li class="nav-item" style="border-left:1px solid white;">
                    <a class="nav-link" href="{{ route('chatter.home') }}">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('calendar.index') }}">Calendrier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">Nous contacter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
