@extends('baseadmin')
@section('title' , 'Accueil || Admin ' )

@section('accueiladmin_content')
<section class="sectadmin">
    <article class="adminpart">
      <div class="divimg">
        <img src="{{ asset('img/admin1.png') }}" alt="" class="imgadmin">

        <div class="blocecrit">
          <h1 class="bienvenue"><Span>Bienvenue</Span> mr/mme L'administrat(eur)-(rice)</h1>
          <p class="ptttexte">Ici c'est votre espace pour bien gerer votre bussiness</p>
        </div>
      </div>

    </article>
    <article class="actionpart">
        <div class="partpb">
          <h2 class="titlegen">Gestion des plats </h2>
          <p class="textgen">Ici vous pouvez gerer vos plats  , cest a dire ajouter des nouveaux plats
            mais en plus les supprimer et les mettre a jour.
          </p>
          <a href="/admin/plats" class=""><button  class="buttonadmin btn" >Gerez vos Plats</button></a>


        </div>
        <div class="partpb">
          <h2 class="titlegen">Gestion des  boissons </h2>
          <p class="textgen">Ici vous pouvez gerer vos  boissons , cest a dire ajouter des nouveaux  boissons
            mais en plus les supprimer et les mettre a jour.
          </p>
          <a href="/admin/boissons" class=""><button  class="buttonadmin btn" >Gerez vos Boissons</button></a>


        </div>
        <div class="parttable">
          <h2 class="titlegen">Gestion des tables </h2>
          <p class="textgen">Ici vous pouvez gerer vos tables pour la reservations , cest a dire ajouter des nouveaux tables
            mais en plus les supprimer et les mettre a jour.
          </p>
          <a href="/admin/tables"  class=""><button  class="buttonadmin btn" >Gerez vos tables</button></a>


        </div>
        </div>
        <div class="partmdp">
          <h2 class="titlegen">Changement de mot de passe</h2>
          <p class="textgen">Ici vous pouvez gerer la  mise en jour de votre mot de passe du compte
          </p>
          <a href="/admin/modifiermdp"  class=""><button  class="buttonadmin btn" >Changer votre mdp</button></a>

        </div>
        </div>
    </article>



   </section>
@endsection
