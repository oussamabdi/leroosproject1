@extends('baseadmin')
@section('title' , 'Plats || Admin ' )

@section('platsadmin_content')
<section class="sectplat">
  <article class="aside">
      <div class="homelogotitre">
          <h2 class="hometitle">BARRE D'ACTION</h2>
      </div>
  <div class="divlinkaside ">
      <div class="divlogolink linkajout">
          <a href="#" class="linkaside  linkajout">Ajouter</a>
          <img src="{{ asset('img/retour.png') }}" alt="" class="imgretout linkajout">
      </div>
      <div class="divlogolink linksupp" >
          <a href="#" class="linkaside linksupp">Supression & Modification</a>
          <img src="{{ asset('img/retour.png') }}" alt="" class="imgretout linksupp">

      </div>



  </div>
  </article>
  <article class="centre">
  <div class="fenetrepajout fenetrep" hidden>
      <h3 class="titreaction">Ajout d'un menu</h3>


      {{-- @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
        @endif --}}
        <form action="{{route('admin.ajoutplat')}}" method="post" class="formplat"  enctype="multipart/form-data">

            @csrf
          <div class="form-floating mb-3">
              <input type="text" class="form-control" name="Nom_plat"  id="floatingInput" placeholder="Le nom du plat" >
              <label for="floatingInput">Le nom du plat</label>
              @error('Nom_plat')
              {{ $message}}
              @enderror
            </div>
            <select class="form-select" aria-label="Default select example" name="Categorie_plat">
              <option selected>Choissisez la categorie du plat</option>
              <option value="Entree">Entree</option>
              <option value="Plat pricipal">Plat pricipal</option>
              <option value="Dessert">Dessert</option>
            </select>
            @error('Categorie_plat')
            {{ $message}}
            @enderror
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Le prix du plat" name="Prix_plat">
              <label for="floatingInput">Le prix du plat</label>
              @error('Prix_plat')
            {{ $message}}
            @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="file" class="form-control" id="floatingInput" placeholder="Uploader l'image du plat" name="img_plat">
              <label for="floatingInput">Uploader l'image du plat</label>
              @error('img_plat')
            {{$message}}
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">ENVOYER</button>
        </form>


  </div>
  <div class="fenetrepdelete fenetrep" >
      <h3 class="titreaction ">Supression & Modification d'un menu </h3>
      <div class="generalboisetplat">
        <div class="divpagplat">
          <div class="titrepagin">
            <h4 class="titresupetmod">Les Plats </h4>
            <nav aria-label="Page navigation example">
                {{ $plats->links()}}

            </nav>
          </div>
            <div class="paginatorplat">
                <div class="paginatorplat">
                    @forelse ($plats  as $plat)
                        @include('objetscard.cardplat')
                    @empty
                        <div class="empty">
                            Aucun resultat
                        </div>
                    @endforelse
                </div>

            </div>
        </div>


     </div>


  </div>

  </article>
</section>
@endsection
