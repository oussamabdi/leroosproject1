@extends('baseadmin')
@section('title', 'Boissons || Admin ')

@section('boissonsadmin_content')
<div class="fenetrepmodifier fenetrep mt-5 p-4" >
    <h3 class="titreaction">Mise à jour d'un menu</h3>
    <form action="{{ route('admin.upboisson' , $boisson) }}" method="post" class="formplat" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Nom_boisson" id="floatingInput" placeholder="Le nom de la boisson"
                value="{{ $boisson->Nom_boisson ?? '' }}">
            <label for="floatingInput">Le nom de la boisson</label>
            @error('Nom_boisson')
            {{ $message }}
            @enderror
        </div>
        <select class="form-select" aria-label="Default select example" name="Categorie_boisson">
            <option value="boisson froide" {{ $boisson->Categorie_boisson == 'boisson froide' ? 'selected' : '' }}>Boisson froide</option>
            <option value="boisson chaude" {{ $boisson->Categorie_boisson == 'boisson chaude' ? 'selected' : '' }}>Boisson chaude</option>
        </select>
        @error('Categorie_boisson')
        {{ $message }}
        @enderror
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Le prix de la boisson"
                name="Prix_boisson" value="{{ $boisson->Prix_boisson ?? '' }}">
            <label for="floatingInput">Le prix de la boisson</label>
            @error('Prix_boisson')
            {{ $message }}
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" name="img_boisson">
            <label for="floatingInput">Uploader l'image de la boisson</label>

            @if($boisson->img_boisson)
                <img src="{{ asset('storage/' . $boisson->img_boisson) }}" alt="Image actuelle de la boisson" style="max-width: 200px; max-height: 120px; margin-top: 10px;">
            @endif

            @error('img_boisson')
                {{$message}}
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">ENVOYER</button>
    </form>
</div>
@endsection
