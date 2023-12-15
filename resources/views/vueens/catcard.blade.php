
        <div class="menu_card">

            <div class="menu_image">
                <img src="{{ asset('storage/' . $plat->img_plat) }}">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>{{$plat->Nom_plat}}</h2>
                <p>
                    {{$plat->Categorie_plat}}
                </p>
                <h3>{{$plat->Prix_plat}} fdj</h3>
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </div>

        </div>


