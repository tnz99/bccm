<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BCCM | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/circular-nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/audio.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="text/css" href="{{ asset('css/prayerwheel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/image-gallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile.css') }}">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body class=@yield('body_class')>
    <div class="wrapper">
        @yield('header')
        @yield('content')
        @yield('nav')
    </div>

    <script src="{{ asset('js/circular-nav.js') }}"></script>
    <script src="{{ asset('js/audio.js') }}"></script>
    <script src="{{ asset('js/prayerwheel.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>