@extends('baseadmin')
@section('title' , 'Boissons || Admin ' )

@section('boissonsadmin_content')
<section class="sectplat">
  <article class="aside">
      <div class="homelogotitre">
          <h2 class="hometitle">BARRE D'ACTION</h2>
      </div>
  <div class="divlinkaside ">
      <div class="divlogolink linkajout">
          <a href="#" class="linkaside ">Ajouter</a>
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
        <form action="{{route('admin.ajoutboisson')}}" method="post" class="formplat"  enctype="multipart/form-data">
            @csrf
          <div class="form-floating mb-3">
              <input type="text" class="form-control" name="Nom_boisson"  id="floatingInput" placeholder="Le nom de la boisson<">
              <label for="floatingInput">Le nom de la boisson</label>
              @error('Nom_boisson')
              {{ $message}}
              @enderror
            </div>
            <select class="form-select" aria-label="Default select example" name="Categorie_boisson">
              <option selected>Choissisez la categorie du boisson</option>
              <option value="boisson fraiche">boisson fraiche</option>
              <option value="boisson chaude">boisson chaude</option>
            </select>
            @error('Categorie_boisson')
            {{ $message}}
            @enderror
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Le prix du plat" name="Prix_boisson">
              <label for="floatingInput">Le prix de la boisson</label>
              @error('Prix_boisson')
            {{ $message}}
            @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="file" class="form-control" id="floatingInput" placeholder="Uploader l'image du boisson" name="img_boisson">
              <label for="floatingInput">Uploader l'image de la boissons</label>
            </div>
            <button type="submit" class="btn btn-primary">ENVOYER</button>
        </form>

  </div>
  <div class="fenetrepdelete fenetrep" hidden>
      <h3 class="titreaction ">Supression & Modification d'un menu </h3>
      <div class="generalboisetplat">

        <div class="divpagboisson">
           <div class="titrepagin">
            <h4 class="titresupetmod mb-3">Les Boissons </h4>
            <nav aria-label="Page navigation example">
                {{$boissons->links()}}

            </nav>
           </div>
            <div class="paginatorboissons">
              @forelse ($boissons as $boisson)
              @include('objetscard.cardboisson')

              @empty
              <div class="empty">
                  Aucun resultat
              </div>
              @endforelse

            </div>
        </div>
     </div>


  </div>


</section>
@endsection
