<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Como Reparar Credito Y Deudas De Tarjetas De Credito')</title>
    <meta name="description"
          content="@yield('meta-description', 'Como Reparar Credito Y Deudas De Tarjetas De Credito ')"/>
    <meta property="og:title" content="@yield('og-title', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="og:type" content="@yield('og-type', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="og:url" content="@yield('og-url', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="og:image" content="@yield('og-image', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="article:published_time"
          content="@yield('article-published_time', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="article:modified_time"
          content="@yield('article-modified_time', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="article:tag"
          content="@yield('article-tag', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta property="article:author"
          content="@yield('article-author', 'Shopware Agentur, Tutorials, Online Kurse & Hosting.')"/>
    <meta name="keywords" content="@yield('keywords', 'Shopware')"/>

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

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '150955275576194');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=150955275576194&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

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

    {{--<footer class="footer-styles navbar-fixed-bottom">--}}
    {{--<div style="height: 100px" class="container-fluid">--}}
    {{--<div class="col-md-2 col-sm-12 col-xs-12">--}}
    {{--<div class="follow-us">--}}
    {{--<ul class="footer-list">--}}
    {{--<li><a class="facebook" href="#"><span class="fa fa-thumbs-o-up"></span></a> <a--}}
    {{--class="text-a-footer" href="#">Like en Facebook</a></li>--}}
    {{--<li><a class="youtube" href="{{url('https://www.youtube.com/user/1984alrodri')}}">--}}
    {{--<span class="fa fa-youtube"></span>--}}
    {{--</a>--}}
    {{--<a class="text-a-footer" href="{{url('https://www.youtube.com/user/1984alrodri')}}">--}}
    {{--Canal de Youtube</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-offset-8 col-md-2 col-sm-12 col-xs-12">--}}
    {{--<div class="follow-us">--}}
    {{--<ul class="footer-list">--}}
    {{--<li>--}}
    {{--<a class="text-a-footer" href="#">Resultados</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</footer>--}}

    <footer class="footer-styles navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="follow-us">
                <div class="col-md-2 col-xs-12 col-sm-12 footer-one">
                    <a class="facebook" href="#"><span class="fa fa-thumbs-o-up"></span></a>
                    <a class="text-a-footer" href="#">Like en Facebook</a>
                </div>
                <div class="col-md-2 col-xs-12 col-sm-12 footer-one  pull-right">
                    <a class="youtube" href="{{url('https://www.youtube.com/user/1984alrodri')}}" target="_blank">
                        <span class="fa fa-youtube"></span></a>
                    <a class="text-a-footer" href="{{url('https://www.youtube.com/user/1984alrodri')}}" target="_blank">
                        Videos De Alonso</a>
                </div>
                {{--<div class="col-md-8 col-xs-12 col-sm-12 footer-two">--}}
                    {{--<a class="text-a-footer" href="http://www.alonsorodriguez.org/actual-credit-repair-results-los-angeles.html" target="_blank">Resultados</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
