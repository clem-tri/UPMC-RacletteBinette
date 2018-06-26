<header class="page-header">

    <!-- Logo Raclette et Binette + Barre de recherche -->
    <div class="row">
        <div class="col-md-4"><a href="{{route("home")}}"><img src="{{asset("storage/images/racetbin.png") }}" alt="Raclette et Binette" class="logorb"/></a></div>

        <div class=" col-md-4">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Rechercher</label>
                    <input style="color: #fff;" type="text" class="form-control" name="search" id="search" placeholder="Rechercher...">
                    <span style="color: #fff;" class="glyphicon glyphicon-search form-control-feedback" ></span>
                </div>
            </form>
        </div>

        <!-- 4 Mini onglets -->
        <div class="col-md-4">
            <div class="grid-inner">
                <ul class="headerLists" style="font-family:'Comfortaa';">
                    <li>
                        <a class="headerListsItems">
                            <img src="{{asset("storage/images/icones/carte_fidelite.png") }}" alt="Carte fidélité" />
                            <p class="headerListsItems_p">Carte fidélité</p>
                        </a>
                    </li>

                    <li>
                        <a class="headerListsItems">
                            <img src="{{asset("storage/images/icones/moncompte.png") }}" alt="Compte utilisateur" />
                            <p class="headerListsItems_p">Mon compte</p>
                        </a>
                    </li>

                    <li>
                        <a class="headerListsItems">
                            <img src="{{asset("storage/images/icones/panier.png") }}" alt="Carte fidélité" />
                            <p class="headerListsItems_p">Mon panier</p>
                        </a>
                    </li>

                    <li>
                        <a class="headerListsItems">
                            <img src="{{asset("storage/images/icones/contact.png") }}" alt="Carte fidélité" />
                            <p class="headerListsItems_p">Nous contacter</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</header>

<!-- Menu -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="padding:0; border-radius: 0px;">
    <div class="container" style="margin:0;">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item">
                 <a class="nav-link" href="https://github.com/avored/laravel-ecommerce"><i class="fab fa-github"></i> GitHub</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="https://www.facebook.com/avoredecommerce/"><i class="fab fa-facebook"></i> Facebook</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="https://twitter.com/avoredecommerce/"><i class="fab fa-twitter"></i> Twitter</a>
             </li>--}}
        </ul>
        <ul class="navbar-nav" style="font-family:'Comfortaa';">



                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Accueil<div class="border_menu">|</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Plante d'extérieur<div class="border_menu">|</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Arbre, Arbuste & Conifère<div class="border_menu">|</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Potager, Verger<div class="border_menu">|</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Outil, Entretien & Soin<div class="border_menu">|</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terreau, Engrais et Paillage<div class="border_menu">|</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/forums')}}">Forum<div class="border_menu">|</div>
                    </a>
                </li>



        </ul>
    </div>
</nav>



<!-- Top menu -->

{{--<header style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span style="font-size: 32px; font-weight: 500; margin-top: 10px;">
                        <img src="{{ asset('vendor/tsdc-default/images/logo_raclette_et_binette.png') }}" alt="logo" class="logo">Chez Raclette et Binette
                    </span>
                </a>
            </div>
            <div class="col-md-6">
                <form class="navbar-form" action="{{ route('search.result') }}" method="get" role="search">
                    <div class="input-group" style="padding-top: 14px;">
                        <input type="text" class="form-control" placeholder="Chercher dans le magasin..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
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
                @include('layouts.menu-tree',['menus' => $menus])
            </ul>
        </div>
    </div>
</nav>--}}
