<div class="card" style="width: 17rem;">
    <img src="{{ asset('storage/' . $table->img_table) }}" " class="imgboisson">
    <div class="card-body">
      <h5 class="card-title">{{ $table->Type_table}}</h5>
      {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
      <p class="card-text">{{ $table->Prix_table}}</p>
      <div class="d-flex gap-2">
        <a href="{{ route('admin.editable' , $table)}}" class="btn btn-primary">Editer</a>
      <form action="{{ route('admin.supptable' , $table)}}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-primary">Supprimer</button>
    </form>
      </div>

    </div>

  </div>
