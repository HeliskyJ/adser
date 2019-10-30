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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
          
<section class="hero is-primary is-size-8">
        <div class="hero-body">
          <div class="container">
              <img src="{{ asset('/images/clean.png') }}" alt="ADSER Servicio de Limpieza" style="width:8em" >
            <h1 class="title">
              ADSER
            </h1>
          </div>
        </div>
      </section>
                  <hr>
        <main class="py-4">
            @include('layouts.nav')
            @yield('content')
        </main>
    </div>
    <script>
    function baseUrl(url){
      return '{{ url('')}}/' + url;
    }
    </script>
</body>
</html>
