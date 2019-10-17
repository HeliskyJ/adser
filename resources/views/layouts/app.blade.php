<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
          
<section class="hero is-primary is-size-8">
        <div class="hero-body">
          <div class="container">
              <img src="{{URL::asset('/image/clean.png')}}" alt="ADSER Servicio de Limpieza">
            <h1 class="title">
              ADSER
            </h1>
          </div>
        </div>
      </section>
                  <hr>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
