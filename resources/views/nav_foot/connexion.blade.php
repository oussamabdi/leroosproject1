@extends('navbar')
@section('title' , 'Connexion ' )

@section('connexion_content')
<section class="sectconnexion " >
    <div class="wrapper">
      <form action="{{route('auth.login')}}" method="post">
        @csrf
          <h1>Se connecter</h1>
          <div class="input-box">
              <input type="email" placeholder="Adresse E-Mail" name="email" >
              <i class='bx bxl-gmail' ></i>
              @error('email')
              {{ $message}}
              @enderror
          </div>

          <div class="input-box">
              <input type="password" placeholder="Mot de passe" name="password" >
              <i class='bx bxs-lock-alt'></i>
              @error('password')
              {{ $message}}
              @enderror
          </div>
          {{-- <div class="remember-me">
              <label><input type="checkbox"> Se souvenir de moi</label>
              <a href="motdepasse.html">Mot de passe oublié?</a>
          </div> --}}

          <button type="submit" class="btn">Se connecter</button>

          <div class="lien-sinscrire">
              <p>Pas de compte?
              <a href="/inscription
              ">S'inscrire</a></p>
          </div>
      </form>

   </div>

   </section>
@endsection
