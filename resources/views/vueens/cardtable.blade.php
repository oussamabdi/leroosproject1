<div class="reser_card">

    <div class="reser_image">
        <img src="{{ asset('storage/' . $table->img_table) }}">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="reser_info">
        <h2>{{$table->Type_table}}</h2>
        <br>
        <h3>{{$table->Prix_table}}</h3>
        <div class="reser_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        {{-- <a href="{{ route('reservationpost', ['id' => $table->id]) }}" class="reser_btn">Réserver</a> --}}
        @auth
        <a href="{{ route('reservation', ['id' => $table->id]) }}" class="reser_btn">Réserver</a>

        @endauth

        @guest
        <button type="button" class="reser_btn2" data-bs-toggle="modal" data-bs-target="#exampleModal2">Réserver</button>
        @endguest




    </div>
</div>
