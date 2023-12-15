@extends('baseadmin')
@section('title' , 'Plats2 || Admin ' )
@section('platsadmin_content')

<div class="fenetrepmodifier fenetrep mt-5 p-4" >
    <h3 class="titreaction">Mise a jour d'un menu</h3>
    <form action="{{ route('admin.upplat', $plat) }}" method="post" class="formplat"  enctype="multipart/form-data">
      @csrf
      @method('PUT')

    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Nom_plat"  id="floatingInput" placeholder="Le nom du plat" value="{{$plat->Nom_plat}} ">
        <label for="floatingInput">Le nom du plat</label>
        @error('Nom_plat')
        {{ $message}}
        @enderror
      </div>
      <select class="form-select" aria-label="Default select example" name="Categorie_plat" value="{{$plat->Categorie_plat}}">
        <option selected>{{$plat->Categorie_plat}}</option>
        <option value="Entree">Entree</option>
        <option value="Plat principal">Plat principal</option>
        <option value="Dessert">Dessert</option>
      </select>
      @error('Categorie_plat')
      {{ $message}}
      @enderror
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Le prix du plat" name="Prix_plat" value="{{$plat->Prix_plat}}">
        <label for="floatingInput">Le prix du plat</label>
        @error('Prix_plat')
      {{ $message}}
      @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" name="img_plat">
        <label for="floatingInput">Uploader l'image du plat</label>

        @if($plat->img_plat)
            <img src="{{ asset('storage/' . $plat->img_plat) }}" alt="Image actuelle du plat" style="max-width: 200px; max-height: 120px; margin-top: 10px;">
        @endif

        @error('img_plat')
            {{$message}}
        @enderror
    </div>

      <button type="submit" class="btn btn-primary">Mettre a jour</button>
  </form>
</div>
@endsection
