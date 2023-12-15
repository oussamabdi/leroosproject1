@extends('navbar')
@section('title' , 'Inscription ' )

@section('inscription_content')
<section class="sectinscription">
    <div class="wrapper">
      <form action="{{route('register')}}" method="POST">
        @csrf
          <h1>S'inscrire</h1>
          <div class="input-box">
              <input type="text" placeholder="Nom et Prénom d'utilisateur" name="name"  required>
              <i class='bx bxs-user'></i>
              @error('name')
              {{ $message}}
              @enderror
          </div>
          <div class="input-box">
              <input type="email" placeholder="Adresse Mail" name="email" required >
              <i class='bx bxl-gmail' ></i>
              @error('email')
              {{ $message}}
              @enderror

          </div>
          <div class="input-box">
              <input type="password" placeholder="Mot de passe" name="password" required >
              <i class='bx bxs-lock-alt'></i>
              @error('password')
              {{ $message}}
              @enderror
          </div>

          <button type="submit" class="btn">S'inscrire</button>

          <div class="lien-sinscrire">
              <p>Déja un compte!
              <a href="/connexion">Se connecter</a></p>
          </div>
      </form>

   </div>
   </section>
@endsection
