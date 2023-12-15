@extends('navbar')
@section('title' , 'Le Menu ' )
@section('lemenu_active', 'active')

@section('lemenucontent')

<section id="Home">

    <div class="main">

        <div class="men_text">
            <h1>Bienvenue chez <span>Le ROOS</span><br></h1>
        </div>

        <div class="main_image bg-light">
            <img src="{{ asset('img/main_img.png') }}" class=" burger">
        </div>

    </div>


</section>







 <!--Menu-->

<div class="menu container" id="Menu">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1><span>Menu</span></h1><br>
    <h3>Plat entre</h3>
    <div class="menu_box">
    @forelse($platentre as $plat)
        @include('vueens.catcard')
        @empty
        <div class="empty">
            Aucun resultat
        </div>
     @endforelse
</div>
    <h3>Plat principal</h3>
    <div class="menu_box">
    @forelse($platprin as $plat)
        @include('vueens.catcard')
        @empty
        <div class="empty ">
            Aucun resultat
        </div>
        @endforelse
</div>

    <h3>Dessert</h3>
    <div class="menu_box">
    @forelse($platdesert as $plat)
        @include('vueens.catcard')
        @empty
        <div class="empty">
            Aucun resultat
        </div>
        @endforelse
</div>
  <hr>


    <h3>Boisson Rafraichissante</h3>
    <div class="menu_box">
    @forelse($boissonfraiche as $boisson)
        @include('vueens.cardboisson')
        @empty
        <div class="empty">
            Aucun resultat
        </div>
        @endforelse
</div>
    <h3>Boisson Rechauffante</h3>
    <div class="menu_box">
    @forelse ($boissonchaude as $boisson)
        @include('vueens.cardboisson')
        @empty
        <div class="empty">
            Aucun resultat
        </div>
        @endforelse
</div>
</div>


@endsection
