<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Blog')</title>
    <meta name="description" content="@yield('meta-description', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="og:title" content="@yield('og-title', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="og:type" content="@yield('og-type', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="og:url" content="@yield('og-url', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="og:image" content="@yield('og-image', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="article:published_time" content="@yield('article-published_time', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="article:modified_time" content="@yield('article-modified_time', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="article:tag" content="@yield('article-tag', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta property="article:author" content="@yield('article-author', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')" />
    <meta name="keywords" content="@yield('keywords', 'Shopware')" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-styles">
            <div class="container-fluid">
                {{--<div class="navbar-header">--}}
                    {{--<a style="font-size: Raleway" class="navbar-brand" href="#">Blog</a>--}}
                {{--</div>--}}
                <ul class="nav navbar-nav custom-navbar">
                    <li><a href="/">Home</a></li>
                    <li><a href="/tarjetas">Tarjetas</a></li>
                    <li><a href="/deudas">Deudas</a></li>
                    <li><a href="/prestamos">Préstamos</a></li>
                    <li><a href="/haz-dinero">Haz Dinero</a></li>
                    <li><a href="/emprender">Emprender</a></li>
                    <li><a href="/economia">Economía</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
        {{--<footer class="footer">--}}
            {{--<div class="container">--}}
                {{--...--}}
            {{--</div>--}}
        {{--</footer>--}}
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
