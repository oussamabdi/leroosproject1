@extends('baseadmin')
@section('title', 'Tables || Admin ')

@section('tablesadmin_content')
<div class="fenetrermodifier fenetrer mt-5 p-5">
    <h3 class="titreaction">Mise à jour d'une table</h3>
    <form action="{{ route('admin.uptable' , $table) }}" method="POST" class="formplat" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <select class="form-select" aria-label="Default select example" name="Type_table">
            <option value="Vip" {{ $table->Type_table == 'Vip' ? 'selected' : '' }}>Vip</option>
            <option value="Classique" {{ $table->Type_table == 'Classique' ? 'selected' : '' }}>Classique</option>
        </select>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Le prix de la table" name="Prix_table"
                value="{{ $table->Prix_table ?? '' }}">
            <label for="floatingInput">Le prix de la table</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" name="img_table">
            <label for="floatingInput">Uploader l'image de la table</label>

            @if($table->img_table)
                <img src="{{ asset('storage/' . $table->img_table) }}" alt="Image actuelle de la table" style="max-width: 200px; max-height: 120px; margin-top: 10px;">
            @endif

            @error('img_table')
                {{$message}}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">ENVOYER</button>
    </form>
</div>
@endsection
