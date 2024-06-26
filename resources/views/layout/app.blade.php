<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eco-Lamber Festival</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <style>
        main {
            background-color: #c9e3ac;

            >.jumbotron {
                height: 700px;
                background-image: url('img/jumbotron_bg.jpg');
                background-size: cover;
            }
        }
    </style>

</head>

<body>
    @include('partial.header')

    <main>
        @yield('main-content')
    </main>

    @include('partial.footer')


</body>

</html>
