<?php

namespace App\Http\Controllers;

use App\Http\Requests\dformuboisson;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\formupbt;
use App\Models\boissons;
use App\Models\plats;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class admincontroller extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function accueiladmin()
    {
        return view('pages_admin.accueiladmin');
    }
    public function connexionadmin()
    {
        return view('pages_admin.connexionadmin');
    }

    // endroit plats
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Auth::login(User::find(1));
        $plat = plats::orderBy('Categorie_plat', 'desc')->paginate(4);
        return view('pages_admin.platsadmin' , [
            'plats'=> $plat,
        ]);

        // return redirect()->route('admin.ajoutplat')->with('success', 'Vous avez bien ajouté votre plat');

    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(formupbt $request)
    // {
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(formupbt $request)
    {

       $img=$request->validated('img_plat');
       $imgchem= $img->store('imgplat', 'public');
        $plats=plats::create([
            'Nom_plat' => $request->validated('Nom_plat') ,
            'Prix_plat'=>$request->validated('Prix_plat'),
            'Categorie_plat'=>$request->validated('Categorie_plat'),
            'img_plat'=>$imgchem

        ]);
    //   return redirect('/connexion')->with("success","Bienvenue dans votre espace");
    //  dd(session('message'));
    // session::put('message', 'Votre plat a ete bien ajoute');

     return redirect()->route('admin.ajoutplat')->with('message', 'Votre plat a ete bien ajoute');



    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plats $plat)
    {
        // $plat2 = plats::orderBy('Categorie_plat', 'desc')->paginate(8);
        return view('pages_admin.formeajoutplat' , [
            'plat'=> $plat,
        ]);
        }


    public function update(plats $plat, formupbt $request)
    {
        // Supprimer l'image actuelle
        if ($request->hasFile('img_plat') ) {
            Storage::delete($plat->img_plat);

             // Ajouter la nouvelle image
            $img = $request->validated('img_plat');
            $imgchem = $img->store('imgplat', 'public');
            $plat->update([
                'Nom_plat' => $request->validated('Nom_plat'),
                'Prix_plat' => $request->validated('Prix_plat'),
                'Categorie_plat' => $request->validated('Categorie_plat'),
                'img_plat' => $imgchem,
            ]);
        }


        // Mettre à jour les autres champs du plat
        $plat->update([
            'Nom_plat' => $request->validated('Nom_plat'),
            'Prix_plat' => $request->validated('Prix_plat'),
            'Categorie_plat' => $request->validated('Categorie_plat'),
        ]);

        return redirect()->route('admin.ajoutplat')->with("success", "Vous avez bien modifié votre plat");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( plats $plat)
    {
        $plat->delete();
        return redirect('/admin/plats')->with("success","Vous avez bien supprime votre plat");
    }

    // endroit boissons
     /**
     * Display a listing of the resource.
     */
    public function indexboisson()
    {
        $boisson = boissons::orderBy('created_at', 'desc')->paginate(4);
        return view('pages_admin.boissonsadmin' , [
            'boissons'=> $boisson
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(formupbt $request)
    // {
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function storeboisson(dformuboisson $request)
    {

        $img1=$request->validated('img_boisson');

        $imgchem1= $img1->store('imgboisson', 'public');
         $boisson=boissons::create([
             'Nom_boisson' => $request->input('Nom_boisson') ,
             'Prix_boisson'=>$request->input('Prix_boisson'),
             'Categorie_boisson'=>$request->input('Categorie_boisson'),
             'img_boisson'=>$imgchem1
         ]);
     //   return redirect('/connexion')->with("success","Bienvenue dans votre espace");
          return redirect('/admin/boissons')->with("success","Vous avez bien ajoutez votre plat");
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function editb(boissons $boisson)
    {
        // $plat2 = plats::orderBy('Categorie_plat', 'desc')->paginate(8);
        return view('pages_admin.fboissonmod' , [
            'boisson'=> $boisson,
        ]);
        }

    /**
     * Update the specified resource in storage.
     */

    public function updateboisson(boissons $boisson, dformuboisson $request)
    {
        // Supprimer l'image actuelle
        if ($request->hasFile('img_boisson') ) {
            Storage::delete($boisson->img_boisson);
            $img2=$request->validated('img_boisson');
            $imgchem2= $img2->store('imgboisson', 'public');
            $boisson->update([
                'Nom_boisson' => $request->validated('Nom_boisson'),
                'Prix_boisson' => $request->validated('Prix_boisson'),
                'Categorie_boisson' => $request->validated('Categorie_boisson'),
                'img_boisson' => $imgchem2,
            ]);
        }

        // Ajouter la nouvelle image

        // Mettre à jour les autres champs du plat
        $boisson->update([
            'Nom_boisson' => $request->validated('Nom_boisson'),
            'Prix_boisson' => $request->validated('Prix_boisson'),
            'Categorie_boisson' => $request->validated('Categorie_boisson'),
        ]);

        return redirect('/admin/boissons')->with("success","Vous avez bien ajoutez votre plat");
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyboisson(boissons  $boisson)
    {
        $boisson->delete();
        return redirect('/admin/boissons')->with("success","Vous avez bien supprime votre boisson");
    }
}
