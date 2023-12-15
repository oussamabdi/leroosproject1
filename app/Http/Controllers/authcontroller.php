<?php

namespace App\Http\Controllers;

use App\Http\Requests\resquestconn;
use App\Http\Requests\resquestconnad;
use App\Models\User;
use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class authcontroller extends Controller
{
    // partie user

    public function dologin (resquestconn $request){
        $infoconn=$request->validated();
        if(Auth::attempt($infoconn)){
            $user = Auth::user();
            $request->session()->regenerate();

            if (!$request->session()->has('badgeDisplayed')) {
                $request->session()->put('badgeDisplayed', true);
            }
               // Redirection avec le message de succès
            return redirect('/');

        };
        return redirect('/connexion')->withErrors([
            'email' => 'Email  invalide'
        ]);

    }

    public function doregister (Request $request){
        $user=User::create([
                'Name' => $request->input('name') ,
                'email'=>$request->input('email'),
                'password'=> Hash::make($request->input('password'))

        ]);
        return redirect('/connexion');


    }

    public function logout(){
        Auth::logout();
        return redirect('/');
        }
  }
