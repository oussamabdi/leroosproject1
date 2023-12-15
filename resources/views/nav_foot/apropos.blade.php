@extends('navbar')
@section('title' , 'Compagnie | LE ROOS' )
@section('apropos_active', 'active')

@section('apropos_content')

<div class="about" id="About">
    <div class="about_main">



        <div class="about_text">
            <h1>Notre<span> Histoire</span></h1><br>

            <p>
                Bienvenue chez Le Roos, un lieu où la passion pour la cuisine rencontre l'art de la convivialité.
                Fondé en 2023, Le Roos est le fruit d'une vision commune :
                créer un espace où les saveurs exquises se marient à une ambiance chaleureuse.
            </p>
        </div>

    </div><br><br><br><br>
    <div class="about" id="About">
        <div class="about_main">



            <div class="about_text">
                <h1>Notre<span> Engagement</span></h1><br>

                <p>
                    Chez Le Roos, nous croyons en l'importance de chaque repas.
                    Chaque plat est soigneusement préparé avec des ingrédients frais et de qualité, capturant l'essence de la cuisine
                    Djiboutienne. Notre équipe dévouée travaille avec passion pour offrir une expérience gastronomique
                    mémorable à chaque visiteur.

                </p>
            </div>

        </div><br><br><br><br>
        <div class="about" id="About">
            <div class="about_main">



                <div class="about_text">
                    <h1>Le<span> Menu</span></h1><br>

                    <p>
                        Découvrez notre menu diversifié qui célèbre la richesse des saveurs et des textures.
                        Des plats emblématiques aux créations uniques, chaque bouchée est une exploration culinaire.
                        Consultez notre menu pour un aperçu alléchant de ce qui vous attend.

                    </p>
                </div>

            </div><a href="/lemenu" class="about_btn">Visiter le Menu</a><br><br><br><br>

            <div class="about" id="About">
                <div class="about_main">



                    <div class="about_text">
                        <h1><span>Contact</span></h1><br>

                        <p>
                            Adresse : Rue d'Ethiopie,Djibouti <br>
                            Téléphone : +253 21 35 65 98 <br>
                            Horaires d'ouverture : [7h - 22h]

                        </p>
                    </div>

                </div>


        </div>
    </div>

</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






 <!--Team-->

 <div class="team">
    <h1>Notre<span> Equipe</span></h1><br><br>
    <p> </p>


    <div class="team_box">
        <div class="profile">
            <img src="{{ asset('img/chef2.jpg') }}">

            <div class="info">
                <h2 class="name">Chef Mohamed</h2>
                <p class="bio">Née le 15 mars 1980 à Arta, Djibouti, Chef Mohamed Beli est un chef de cuisine
                    renommée national.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="{{ asset('img/chef1.jpg') }}">

            <div class="info">
                <h2 class="name">Chef Oussama</h2>
                <p class="bio">Née le 20 mai 1992 à Djibouti Ville, Chef Oussama Rayan est un chef de cuisine
                    renommée national.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>
    </div>

</div>

<div class="team">
    <div class="team_box">
        <div class="profile">
            <img src="{{ asset('img/serveur1.jpg') }}">

            <div class="info">
                <h2 class="name">Serveur Wais</h2>
                <p class="bio">Né le 05 avril 1999 à Dhikil, Wais sera le visage accueillant de votre expérience au restaurant.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="{{ asset('img/serveur2.jpg') }}">

            <div class="info">
                <h2 class="name">Serveur Ayanleh</h2>
                <p class="bio">Né le 12 août 1998 à Héron, incarne l'élégance et la courtoisie au sein du restaurant Le Roos.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>
        <div class="profile">
            <img src="{{ asset('img/serveur4.jpg') }}">

            <div class="info">
                <h2 class="name">Serveur Hamza</h2>
                <p class="bio">Né le 8 mars 2001 à Djibouti, apporte son charme et son expertise au sein du restaurant Le Roos</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>
        <div class="profile">
            <img src="{{ asset('img/serveur3.jpg') }}">

            <div class="info">
                <h2 class="name">Serveuse Inés</h2>
                <p class="bio">Né le 25 juin 1995 à Hodan, Inés est une serveuse incarnant l'hospitalité
                               du restaurant Le Roos.</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
