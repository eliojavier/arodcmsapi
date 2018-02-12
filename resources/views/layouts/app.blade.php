<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Shopware Agentur, Tutorials, Online Kurse & Hosting')</title>
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
