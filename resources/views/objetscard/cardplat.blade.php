<div class="card" style="width: 17rem;">
    <img src="{{ asset('storage/' . $plat->img_plat) }}" class="imgplat">
    <div class="card-body">
      <h5 class="card-title">{{$plat->Nom_plat}}</h5>
      <h6 class="card-subtitle mb-2 text-muted"> {{$plat->Categorie_plat}}</h6>
      <p class="card-text">{{$plat->Prix_plat}} fdj</p>
      <div class="d-flex gap-4 ">
        <a href="{{ route('admin.ediplat' , $plat)}}" class="btn btn-primary">Editer</a>
        {{-- <a href="{{ route('admin.upplat', $plat) }}" data-method="PUT" data-token="{{ csrf_token() }}">Mettre à jour</a> --}}

      <form action="{{ route('admin.suppplat' , $plat)}}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-primary">Supprimer</button>
    </form>
      </div>

    </div>
  </div>
