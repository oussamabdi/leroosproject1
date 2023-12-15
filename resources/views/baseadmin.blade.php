<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/inscriconnex.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styleadmin.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/cssboot/bootstrap.min.css') }}" />

</head>
<body>

        <header class="">
            <nav class="artnav "  >
                <div class="titre-logo ">
                    <img src="{{ asset('img/logo3.jpg') }}" alt="" class="logo">
                    {{-- <h1 class="titre ">LE ROOS</h1> --}}
                </div>
              <div class="lien">
                <a href="/admin" class="linkitem">Accueil</a>
                <a href="/admin/plats" class="linkitem">Plats</a>
                <a href="/admin/boissons" class="linkitem">Boissons</a>
                <a href="/admin/tables" class="linkitem">Tables</a>

              </div>
              <div class="connexion">
                <form action="{{ route('admin.logout')}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn2 ">Se deconnecter</button>
                </form>
              </div>
            </nav>



          </header>

          @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
         @yield('platsadmin_content')
         @yield('boissonsadmin_content')
         @yield('tablesadmin_content')
         @yield('accueiladmin_content')



         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
         <script src="{{ asset('js/jsfileperso.js') }}" ></script>
         <script src="{{ asset('js/jsperso2.js') }}" ></script>
        </body>
        </html>

