<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','A default title')</title>
    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script
      src="https://kit.fontawesome.com/5c57781684.js"
      crossorigin="anonymous"
    ></script>
    <!-- Styles -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@stack('token')
</head>
<body>


        <main>
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="{{ asset('js/lazyLoading.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" ></script>

    {{-- <script src="https://api-maps.yandex.ru/2.1/?apikey=45185f8a-5595-4dca-a730-067482a1af71&lang=ru_RU" type="text/javascript"> </script> --}}
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=45185f8a-5595-4dca-a730-067482a1af71" type="text/javascript"></script>

    @stack('quizscript')


</body>
</html>


