@extends('navbar')
@section('title', 'Reservation ')
@section('reservation_active', 'active')

@section('resercontent')

<section id="Home" class="mb-5">
     @if (session('etable'))
    <div class="alert alert-success">
        {{ session('etable') }}
    </div>
    <?php session()->forget('etable'); ?>

 @endif
     @if (session('r1'))
    <div class="alert alert-success">
        {{ session('r1') }}
    </div>
    <?php session()->forget('r1'); ?>

 @endif
    <div class="main">

        <div class="men_text">
            <h1>Reservez chez <span>Le ROOS</span><br></h1>
        </div>

        <div class="main_image bg-light">
            <img src="{{ asset('img/imgreser.png') }}" class=" burger">
        </div>

    </div>


</section>
    <!--reser-->

    <div class="reser" id="reser">
        <h1><span>Réservation</span></h1>

        <div class="reser_box">
            @forelse ($tables as $table)
                @include('vueens.cardtable')
            @empty
                <div class="empty">
                    Aucun resultat
                </div>
            @endforelse
        </div>
    </div>








    <!--Order-->
    <div class="order" id="Order">
        <h1><span>Réserver</span>Maintenant</h1>

        <div class="order_main">
            <form action="{{ route('reservationpost') }}" method="POST">
                @csrf

                <input type="hidden" name="Id_table" value="{{ request()->route('id') }}">
                <div class="input">
                    <p>Numéro</p>
                    <input type="text" name="numero" placeholder="Votre numéro" required>
                    @error('numero')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input">
                    <p>Quel type de table</p>
                    <select name="Type_reservation" aria-placeholder="Votre type de table" required>
                        <option value="Classique">Classique</option>
                        <option value="VIP">V.I.P</option>
                    </select>
                    @error('Type_reservation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input">
                    <p>Date d'arrivée</p>
                    <input type="date" name="Date_reservation" id="Date_reservation" placeholder="Votre date d'arrivée" required>
                    @error('Date_reservation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Sélectionner l'élément input de la date
                        var inputDate = document.getElementById('Date_reservation');

                        // Obtenir la date actuelle au format AAAA-MM-JJ
                        var currentDate = new Date().toISOString().split('T')[0];

                        // Définir la date minimale à la date actuelle
                        inputDate.min = currentDate;

                        // Ajouter un écouteur d'événements pour vérifier la date lors de la saisie
                        inputDate.addEventListener('input', function() {
                            var selectedDate = inputDate.value;

                            // Vérifier si la date sélectionnée est passée
                            if (selectedDate < currentDate) {
                                alert('Les dates passées ne sont pas autorisées.');
                                // Réinitialiser la date à la date actuelle
                                inputDate.value = currentDate;
                            }
                        });
                    });
                </script>


                <div class="input">
                    <p>Heure</p>
                    <select name="Heure_reservation" id="heure" required>
                        @for ($i = 8; $i <= 23; $i++)
                        @php
                            $hour = str_pad($i, 2, '0', STR_PAD_LEFT);
                            $time = $hour . ':00';
                        @endphp
                        <option value="{{ $time }}">{{ $time }}</option>
                        @php
                            $time = $hour . ':30';
                        @endphp
                        <option value="{{ $time }}">{{ $time }}</option>
                    @endfor
                    </select>
                    @error('Heure_reservation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <br>
                @auth
                <button type="submit" class="order_btn">Soumettre</button>

                @endauth

                @guest
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="order_btn">Soumettre</button>
                 @endguest
            </form>

        </div>
    </div>


    </div>
@endsection
