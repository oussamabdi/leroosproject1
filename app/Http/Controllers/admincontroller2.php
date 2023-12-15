<?php

namespace App\Http\Controllers;

use App\Http\Requests\dformutable;
use App\Http\Requests\formupbt;
use App\Models\tables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class admincontroller2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = tables::orderBy('Type_table', 'desc')->get();
        return view('pages_admin.tablesadmin' , [
            'tables'=>$table
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function storet(dformutable $request)
    {

       $img2=$request->validated('img_table');
       $imgchem2= $img2->store('imgtable', 'public');
        $tables=tables::create([
            'Prix_table'=>$request->input('Prix_table'),
            'Type_table'=>$request->input('Type_table'),
            'img_table'=>$imgchem2
        ]);
    //   return redirect('/connexion')->with("success","Bienvenue dans votre espace");
         return redirect('/admin/tables')->with("success","Vous avez bien ajoutez votre table");

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tables $table)
    {
        return view('pages_admin.ftablemod' , [
            'table'=> $table,
        ]);
        }


        public function update(tables $table, dformutable $request)
        {
            // dd($request->hasFile('img_table') , Storage::exists($table->img_table));
            // Supprimer l'image actuelle
            if ($request->validated('img_table') ) {
                Storage::delete($table->img_table);

                // Ajouter la nouvelle image
                $img1 = $request->validated('img_table');
                $imgchem1 = $img1->store('imgtable', 'public');
            } else {
                // Initialiser $imgchem1 si aucune nouvelle image n'est téléchargée
                $imgchem1 = $table->img_table;
            }

            // Mettre à jour les autres champs, y compris le cas où une nouvelle image est téléchargée
            $table->update([
                'Prix_table' => $request->validated('Prix_table'),
                'Type_table' => $request->validated('Type_table'),
                'img_table' => $imgchem1,
            ]);

            return redirect('/admin/tables')->with("success", "Vous avez bien mis à jour votre table");
        }


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tables $table)
    {
        $table->delete();
        return redirect('/admin/tables')->with("success","Vous avez bien supprime votre table");    }
}
