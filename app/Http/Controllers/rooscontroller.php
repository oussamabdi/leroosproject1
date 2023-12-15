<?php

namespace App\Http\Controllers;

use App\Http\Requests\reserrequest;
use App\Http\Requests\searchrequest;
use App\Models\boissons;
use App\Models\plats;
use App\Models\reservation;
use App\Models\tables;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class rooscontroller extends Controller
{
    //
    public function accueil()
    {
        return view('nav_foot.accueil');
    }
    public function reservation()
    {
        $tables = tables::query()->orderby('created_at', 'desc')->get();
        return view('nav_foot.reservation', [
            "tables" => $tables
        ]);
    }


    public function reservationpost(reserrequest $request)
{
    // Récupérer la table depuis la base de données en utilisant l'ID du formulaire
    $tableId = $request->input('Id_table');
    $table = tables::find($tableId);

    // Vérifier si la table existe
    if (!$table) {
        // Gérer le cas où la table n'est pas trouvée, par exemple, rediriger vers une page d'erreur
        $request->session()->put("etable", "veuillez selectionnez une table svp ");
        return redirect('/reservation');
    }

    // Validation des données
        $inforser = $request->validated();
    //     // Création de la réservation dans la base de données
        reservation::create([
            'Id_table' => $table->id,
            'numero' => $inforser['numero'],
            'Type_reservation' => $inforser['Type_reservation'],
            'Date_reservation' => $inforser['Date_reservation'],
            'Heure_reservation' => $inforser['Heure_reservation'],
            // Ajoutez d'autres champs de réservation selon vos besoins
        ]);
    // ... Reste du code ...
    $request->session()->put("r1", "reservation bien pris en compte");
    return redirect('/reservation');

}


    public function login()
    {
        return view('nav_foot.connexion');
    }
    public function register()
    {
        return view('nav_foot.inscription');
    }
    public function menu(searchrequest $request)
    {
        // query entre
        $queryentre = plats::query()->where('Categorie_plat', 'entree')->get();
        // query principal
        $queryprinc = plats::query()->where('Categorie_plat', 'plat principal')->get();
        // query dessert
        $querydeser = plats::query()->where('Categorie_plat', 'dessert')->get();

        $boissonchaude = boissons::where('Categorie_boisson', 'boisson chaude')->get();
        $boissonfraiche = boissons::where('Categorie_boisson', 'boisson fraiche')->get();
        return view('nav_foot.lemenu', [
            'platentre' => $queryentre,
            'platprin' => $queryprinc,
            'platdesert' => $querydeser,
            'boissonchaude' => $boissonchaude,
            'boissonfraiche' => $boissonfraiche,
            'input' => $request->validated()

        ]);
    }
    public function apropos()
    {
        return view('nav_foot.apropos
    ');
    }
}
