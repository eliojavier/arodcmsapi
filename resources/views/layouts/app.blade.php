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
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-101401538-1', 'auto');
        ga('send', 'pageview');

    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=150955275576194&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body>
<div id="app">
    <nav class="navbar navbar-styles" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
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

    <footer class="footer-styles navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="follow-us">
                <div class="col-md-6 col-xs-6 col-sm-6 footer-one">
                    <div class="fb-like"
                         data-href="https://business.facebook.com/Alonso-Rodriguez-672425609610138/?business_id=332688933904325&ref=bookmarks"
                         data-layout="button"
                         data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6 footer-two">
                    <a class="text-a-footer" href="{{url('https://www.youtube.com/user/1984alrodri')}}" target="_blank">
                        Videos De Alonso</a>
                    <a class="youtube" href="{{url('https://www.youtube.com/user/1984alrodri')}}" target="_blank">
                        <span class="fa fa-youtube"></span></a>
                </div>
            </div>
        </div>
    </footer>

</div>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
