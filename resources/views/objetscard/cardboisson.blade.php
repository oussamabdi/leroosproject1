<div class="card" style="width: 17rem;">
    <img src="{{ asset('storage/' . $boisson->img_boisson) }}" class="imgboisson">
    <div class="card-body">
      <h5 class="card-title">{{$boisson->Nom_boisson}}</h5>
      <h6 class="card-subtitle mb-2 text-muted"> {{$boisson->Categorie_boisson}}</h6>
      <p class="card-text">{{$boisson->Prix_boisson}} fdj</p>
      <div class="d-flex gap-2">
        <a href="{{ route('admin.ediboisson' , $boisson)}}" class="btn btn-primary">Editer</a>
        <form action="{{ route('admin.suppboisson' , $boisson)}}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-primary">Supprimer</button>
    </form>
      </div>

    </div>
  </div>
