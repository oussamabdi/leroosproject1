<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/inscriconnex.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/cssboot/bootstrap.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('/css/page1.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/apropos.css') }}" /> --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <header class="">
        <nav class="artnav ">
            <div class="titre-logo ">
                <img src="{{ asset('img/logo3.jpg') }}" alt="" class="logo">
                {{-- <h1 class="titre ">LE ROOS</h1> --}}
            </div>
            <div class="lien">
                <a href="/" class="linkitem @yield('accueil_active')">Accueil</a>
                <a href="/lemenu" class="linkitem @yield('lemenu_active')">Le Menu</a>
                <a href="/reservation" class="linkitem @yield('reservation_active')">Reservation</a>
                <a href="/apropos" class="linkitem @yield('apropos_active')">Notre Compagnie</a>
            </div>
            <div class="connexion">
                {{-- <a href="/connexion" class=""><button class="bconn">Connexion</button></a>
                <a href="/inscription" class=""><button class="bconn">Inscription</button></a> --}}
                @auth

                <div class="infocompte">
                    <button type="button" class="bcompte" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="imgcompte" src="{{ asset('img/admin2.jpeg') }}" alt="">
                        {{ \Illuminate\Support\Facades\Auth::user()->Name }}
                        @if(Auth::check() && session('badgeDisplayed'))
                            <span class="position-absolute top-50 start-10 translate-middle p-2  bg-warning border border-light rounded-circle">
                                <span class="visually-hidden">Connecté</span>
                            </span>

                            <?php session()->forget('badgeDisplayed'); ?>
                             {{-- Supprimez la variable de session après l'avoir affichée --}}
                        @endif
                    </button>
                </div>


                @endauth
                @guest
                    <a href="/connexion" class=""><button class="bconn">Connexion</button></a>
                    <a href="/inscription" class=""><button class="bconn">Inscription</button></a>
                @endguest





            </div>
        </nav>



    </header>

    <section class="content1">

        @auth
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Vos informations de compte</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('img/admin1.png') }}" alt="" class="img-fluid  modalimg">
                            <p><strong>Nom:</strong> {{ \Illuminate\Support\Facades\Auth::user()->Name }}</p>
                            <p><strong>Email:</strong> {{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                            <!-- Ajoutez d'autres informations de l'utilisateur ici -->
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-primary ">Se deconnecter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Connexion requise </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-footer">

                        <button class="btn btn-primary ">Se connecter</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- @if (session('r1'))
        <div class="alert alert-success">
            {{ session('r1') }}
        </div>
     @endif --}}

        @yield('accueilcontent')
        @yield('connexion_content')
        @yield('inscription_content')
        @yield('lemenucontent')
        @yield('resercontent')
        @yield('apropos_content')
    </section>



    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Localisation</h2>
                <p>Djibouti (Pays)</p>
                <p>Djibouti (Ville)</p>
            </div>



            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+253 77 34 67 59</p>
                <p>+253 77 02 20 08</p>
                <p>restaurantleroos@gmail.com</p>
            </div>


            <div class="footer_tag">
                <h2>Suivre</h2>
                <a href="http://"><i class='bx bxl-facebook-circle bx-tada'></i></a>
                <a href="http://"><i class='bx bxl-twitter bx-tada'></i></a>
                <a href="http://"><i class='bx bxl-instagram bx-tada'></i></a>
            </div>

        </div>

        <h4>
            <p class="end">&copy; 2023<span><i class="fa-solid fa-face-grin"></i> Le ROOS </span>- Tous droits
                réservés</p>
        </h4>

    </footer>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jsfileperso.js') }}"></script>
   

</html>
