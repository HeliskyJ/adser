<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
</head>
<body id="bodyNav">
    <div id="app">
        @if(Auth::check())
        <header class="hero" >
            <div class="hero_head">
              <nav class="navbar has-background-grey-dark">
                <div class="navbar-brand">
                  <a href="" class="navbar-item is--brand">
                    <img class="navbar-brand-logo" src="{{ asset('images/cleann.png') }}" alt="Ceansy">
                  </a>
                  <a href="" class="navbar-item is-tab is-hidden-mobile is-active">
                    <span class="icon is-medium">
                      <i class="fa fa-home"></i>
                    </span>
                    <font style="vertical-align:inherit;">
                      <font style="vertical-align: inherit;">Inicio</font>
                    </font>
                  </a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile is-active">
                        <font style="vertical-align:inherit;">
                        <font style="vertical-align:inherit;">about</font>
                      </font>
                      </a>
                      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                          <span aria-hidden="true"></span>
                          <span aria-hidden="true"></span>
                          <span aria-hidden="true"></span>
                        </a>
                  </div>
            <div class="navbar-menu navbar-end" id="navMenu">
              <a href="" class="nabvar-item is-tab is-hidden is-active">
                Home
              </a>
              <div class="navbar-item has-dropdown is-hoverable">
                <a href="" class="nabvar-item nabvar-link">
                  <figure class="image is-32x32" style="magin-right:.5em">
                  <img src="{{ asset('images/men.png') }}" alt="">
                  </figure>
                  <font style="vertical-align:inherit;">
                  <font style="vertical-align:inherit;">Hely Mendez</font>
                </font>
                </a>
                <div class="navbar-dropdown is-right">
                  <a href="" class="navbar-item">
                    <span class="icon is-small">
                      <i class="fa fa-user-o"></i>
                    </span>
                    <font style="vertical-align: inherit;">
                    <font class="has-text-black-ter" style="vertical-align:inherit;">&nbsp; Perfil</font>
                  </font>
                  </a>
                  <hr class="navbar-divider">
                  <a href="" class="nabvar">
                    <font style="vertical-align:inherit;">
                        <font style="vertical-align:inherit;">&nbsp;
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                            <button class="button">                           
                               <span class="icon is-small">
                                <i class="fa fa-power-off"></i>
                              </span> Cerrar Sesion</button>
                            </form></font>
                    </font>
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>
          </header>
          @endif
        <main class="py-4">
            @if(Auth::check())
            @include('layouts.nav')
            @endif
            @yield('content')
            @include('layouts.footer')
        </main>
    </div>
    <script>
    function baseUrl(url){
      return '{{ url('')}}/' + url;
    }
    </script>
    <script>
    $(document).ready(function() {

// Check for click events on the navbar burger icon
$(".navbar-burger").click(function() {

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");

});
});</script>

</body>
</html>
