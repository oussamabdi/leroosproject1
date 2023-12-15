@extends('navbar')
@section('title', 'Accueil ')
@section('accueil_active', 'active')

@section('accueilcontent')
    <article class="artgrandeimg">
        {{-- @if(session('m1'))
        <div class="alert alert-success">
            {{ session('m1') }}
        </div>
        @endif --}}
        <img src=" {{ asset('img/logo.jpg') }} " alt="" class="logo">
        <h1>BIENVENUE CHEZ LE ROOS</h1>
        <p class="desc"> Chez nous, chaque repas devient une expérience mémorable
            Réservez Aujourd'hui et laissez-nous créer des Souvenirs Gustatifs Pour Vous.
        </p>
        @guest
            <a href="#accueiljsuisla" class="linkbutton"><button class="btn1" id="accueilallez">DECOUVREZ LE ROOS</button></a>
            <a href="/connexion" class="linkbutton2"><button class="btn1">CONNEXION</button></a>


        @endguest

    </article>
    <div id="myCarousel" class="carousel container slide mb-6 mt-3" data-bs-ride="carousel " id="accueiljsuisla">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/4kbg.jpg') }}" class="imgcarousel" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Decouvrez des plats nouveaux</h1>
                        <p class="opacity-75 ">Decouvrez l'essence de l'excellence chez LE ROOS,où chaque plat est une
                            oeuvre d'art gustative.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">VISITEZ LE MENU</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/imgrace.jpg') }}" class="imgcarousel" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="text-dark">Passez du bon moment avec vos proches</h1>
                        <p class="text-dark">Réservez Aujourd'hui et laissez-nous créer des Souvenirs Gustatifs Pour Vous.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Inscrivez vous et reservez</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/kitchen.jpg') }}" class="imgcarousel" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1 class="text-dark">Venez visitez Le ROOS.</h1>
                        <p class="text-dark">Some representative placeholder content for the third slide of this carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Decouvre avec moi</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr class="featurette-divider">

    <article class="lemenu container ">

        <div class=" bloctexte  ">

            <h2 class="titrefeaturette">Decouvrez <span class="titrefeaturettespan">une symphonie de saveurs chez Le ROOS.
                </span></h2>
            <p class=" text-dark">Nos menus,inspirés par des ingrédients frais et locaux,offrent une expérience
                gastronomique unique.
                Des plats traditionnels revisités aux créations audacieuses,chaque bouchée est une invitation culinaire.
                Rejoignez-nous pour un festin où l'élégance rencontre la passion,créant ainsi une expérience mémorable
                chaque visite. </p>
            <a href="/lemenu"><button type="button" class="btn btn-primary">
                    VOIR LE MENU
                </button></a>

        </div>


        <!-- Modal -->

        <div class="blocimage">
            <img src="{{ asset('img/menuimg.jpg') }}" alt="" width="350" height="300">

        </div>
        </div>
    </article>
    <hr class="">

    <article class="reservation container">
        <div class=" bloctexte ">
            <h2 class="titrefeaturette">Réservez <span class=" titrefeaturettespan">votre table dès maintenant chez Le ROOS
                    pour une expérience culinaire inoubliable.</span></h2>
            <p class="">Avec notre service de réservation facile,planifiez votre repas en quelques clics.
                Que ce soit pour une occasion spéciale ou simplement pour savourer nos délices du jour,nous vous
                accueillerons avec plaisir.Profitez d'une soirée gastronomique où le confort et la délectation se
                réjoignent.
                Réservez Aujourd'hui et laissez-nous créer des Souvenirs Gustatifs Pour Vous. </p>
            <a href="/"><button type="button" class="btn btn-primary">
                    VOIR LES RESERVATIONS
                </button></a>
        </div>

        <!-- Modal -->

        <div class="blocimage">
            <img src="{{ asset('img/reservation.jpg') }}" alt="" width="350" height="300">

        </div>
        </div>
    </article>
    <hr class="">
    <article class="compagny container">
        <div class=" bloctexte ">
            <h2 class="titrefeaturette">Bienvenue à Le ROOS :<span class="titrefeaturettespan">Elegance Culinaire
                    Redéfinie.</span></h2>
            <p class="text-dark">Notre carte,façonnée par des ingrédients locaux de première qualité,offre une expérience
                gastronomique créative et raffinée
                Que vous optiez pour une soirée romantique ou une célébration speciale,chaque visite promet une immersion
                dans une symphonie de saveurs,orchestrée avec passion par nos chefs. Chez nous, chaque repas devient une
                expérience mémorable,
                alliant authenticité,qualité et service attentif.Bienvenu à LE ROOS,où l'élégance culinaire redéfinit vos
                attentes. </p>
            <a href="/apropos"><button type="button" class="btn btn-primary">
                    VOIR NOTRE COMPAGNIE
                </button></a>
        </div>

        <!-- Modal -->

        <div class="blocimage">
            <img src=".{{ asset('img/kitchen.jpg') }}" alt="" width="350" height="300">

        </div>
        </div>
    </article>


@endsection
