
<div class="menu_card">

    <div class="menu_image">
        <img src="{{ asset('storage/' . $boisson->img_boisson) }}">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>{{$boisson->Nom_boisson}}</h2>
        <p>
            {{$boisson->Categorie_boisson}}
        </p>
        <h3>{{$boisson->Prix_boisson}}</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
    </div>

</div>


