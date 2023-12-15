@extends('baseadmin')
@section('title' , 'Tables || Admin ' )

@section('tablesadmin_content')
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
    <div class="fenetrepajout fenetrer "  >
      <h3 class="titreaction">Ajout d'une table</h3>
      <form action="{{ route('admin.ajoutable')}}" method="POST" class="formplat" enctype="multipart/form-data">
        @csrf
          <select class="form-select" aria-label="Default select example " name="Type_table">
            <option selected>Choissisez la categorie de la table</option>
            <option value="Vip">Vip</option>
            <option value="Classique">Classique</option>
          </select>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Le prix de la table" name="Prix_table">
            <label for="floatingInput">Le prix de la table</label>
          </div>
          <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" placeholder="LUploader l'image de la table" name="img_table">
            <label for="floatingInput">Uploader l'image de la table</label>
          </div>
          <button type="submit" class="btn btn-primary">ENVOYER</button>
      </form>
    </div>
    <div class="fenetrepdelete fenetrer" >
      <h3 class="titreaction">Supression & Modification d'une table</h3>
      <div class="generalboisetplat">
        <div class="divpagplat">
          <div class="titrepagin">
            <h4 class="titresupetmod">Les tables </h4>
            {{-- <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav> --}}
          </div>
            <div class="paginatorreser">
                @forelse ($tables as $table)
                @include('objetscard.cardtable')

                @empty
                <div class="empty">
                    Aucun resultat
                </div>
                @endforelse


            </div>
        </div>


     </div>
    </div>

    </article>
</section>
@endsection
