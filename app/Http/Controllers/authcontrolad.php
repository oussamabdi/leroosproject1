<?php

namespace App\Http\Controllers;

use App\Http\Requests\resquestconnad;
use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Hr;

class authcontrolad extends Controller
{
      // partie admin

    //   public function doregisterad (){
    //     $user=Administrateur::create([
    //             'id_admin'=>'id456',
    //             'password_admin'=> Hash::make('oussa2')

    //     ]);
    //     return redirect('/admin/connexion')->with("success","Bienvenue dans votre espace222");

    //  }
      public function dologinad(resquestconnad $request)
      {
        //   dd(session()->all());
          $infoconn2 = $request->validated();
        //   dd(Auth::guard('administrateur')->attempt($infoconn2));
          if (Auth::guard('administrateur')->attempt($infoconn2)) {
                   $admin = Auth::guard('administrateur')->user();
                //    dd($admin);
                   // C'est un administrateur
                  $request->session()->regenerate();

                  return redirect('/admin')->with('success', 'Bienvenue, admin !');
                }
              return redirect('/admin/connexion')->withErrors([
                  'id_admin' => 'id invalide',
              ]);

          }




      public function logoutad()
      {
        Auth::guard('administrateur')->logout();
        return redirect('/admin/connexion');
      }


      public function editmdp()
      {
          return view('pages_admin.modmdp');
      }

      public function updatemdp(Request $request)
      {
          $request->validate([
              'current_password' => 'required',
              'new_password' => 'required|min:3',
              'confirm_password' => 'required|same:new_password',
          ]);

          $admin = Auth::guard('administrateur')->user();

          // Vérifier le mot de passe actuel
          if (Hash::check($request->input('current_password'), $admin->password)) {
              // Mot de passe actuel correct, mettre à jour le mot de passe
              $admin->update([
                  'password' => Hash::make($request->input('new_password')),
              ]);

              return redirect()->route('admin.editmdp')->with('success', 'Mot de passe modifié avec succès.');
          }

          return redirect()->route('admin.editmdp')->withErrors([
              'current_password' => 'Le mot de passe actuel est incorrect.',
          ]);
      }


}
