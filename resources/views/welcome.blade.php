@extends('layouts.app')

@section('content')
    <div class="">
        <div class="container">
            <br>
            <div class="row no-padding">
                <div class="col-md-4 no-padding portfolio-section">
                    <img class="full-width img-responsive images"
                         style="height:480px; width:100%;object-fit: cover"
                         src="{{$articles[0]->img_url}}" alt="Articulo 1">
                    <div class="overlay">
                        <div class="overlay-text">
                            <a href="{{url('articles/' . $articles[0]->permalink)}}">Ver más</a>
                        </div>
                    </div>
                    <div class="text">
                        <a href="{{url('articles/' . $articles[0]->permalink)}}"><h4
                                    style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                {{$articles[0]->title}}
                            </h4></a>
                    </div>
                </div>
                <div class="col-md-4 no-padding portfolio-section">
                    <img class="full-width img-responsive images"
                         style="height:480px; width:100%;object-fit: cover"
                         src="{{$articles[1]->img_url}}" alt="Articulo 2">
                    <div class="overlay">
                        <div class="overlay-text">
                            <a href="{{url('articles/' . $articles[1]->permalink)}}">Ver más</a>
                        </div>
                    </div>
                    <div class="text">
                        <a href="{{url('articles/' . $articles[1]->permalink)}}"><h4
                                    style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                {{$articles[1]->title}}
                            </h4></a>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$articles[2]->img_url}}" alt="Articulo 3">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url('articles/' . $articles[2]->permalink)}}">Ver más</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $articles[2]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$articles[2]->title}}
                                </h4></a>
                        </div>
                    </div>
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images" src="{{$articles[3]->img_url}}"
                             style="height:240px; width:100%;object-fit: cover"
                             alt="Articulo 4">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url('articles/' . $articles[3]->permalink)}}">Ver más</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $articles[3]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$articles[3]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="welcome-area">
                        <div class="title-area">
                            <h2 class="tittle">Bienvenidos a <span>Mi Blog</span></h2>
                            <span class="tittle-line"></span>
                            <p style="text-align: justify">Gracias por visitar nuestro sitio web Mi Nuevo Credito. Este
                                blog es para usted si desea
                                aprender cómo mejorar su puntuación de crédito, reparar su reporte de crédito, elevar su
                                puntaje de crédito, y obtener tarjetas de crédito y préstamos para lograr el sueño
                                Americano. También enseñamos sobre la dos industrias estafadoras como consolidación de
                                deudas y la liquidación de la deudas. Básicamente se le enseñara a correr asi a las
                                colinas si no desea ser engañados por empresas en esas dos industrias.</p>
                            <p style="text-align: justify">Si necesita ayuda con Reparación de Crédito, Prestamos Para
                                Consolidación de Deudas o
                                consejos sobre cómo elevar su puntaje de crédito, por favor póngase en contacto con el
                                consejero de crédito Alonso Rodríguez a través de http://www.alonsorodriguez.org/ o el
                                número 1-877-373-9043.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img style="width: 100%; margin:15px" src="{{asset('images/banner.png')}}" alt="banner">
                </div>
            </div>
        </div>
    </section>
    <section id="from-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="from-blog-area">
                    {{--<div class="title-area">--}}
                    {{--<h2 class="tittle">Our blog</h2>--}}
                    {{--<span class="tittle-line"></span>--}}
                    {{--<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id--}}
                    {{--quod maxime placeat facere possimus, omnis voluptas assumenda est</p>--}}
                    {{--</div>--}}
                    <!-- From Blog content -->
                        <div class="from-blog-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <article class="single-from-blog">
                                        <figure>
                                            <a href="{{url('articles/' . $articles[4]->permalink)}}"><img
                                                        src="{{$articles[4]->img_url}}"
                                                        alt="img"></a>
                                        </figure>
                                        <div class="blog-title">
                                            <h2>
                                                <a href="{{url('articles/' . $articles[4]->permalink)}}">{{$articles[4]->title}}</a>
                                            </h2>
                                            <p>Publicado por <a class="blog-admin"
                                                                href="#">{{$articles[4]->user->name}}</a> el <span
                                                        class="blog-date">{{$articles[4]->created_at}}</span></p>
                                        </div>
                                        <p>{!!substr(html_entity_decode($articles[4]->body), 0, 90)!!}...</p>
                                        <div style="text-align: center!important;">
                                            <a href="{{url('articles/' . $articles[4]->permalink)}}"
                                               class="button button-default read-more" data-text="Leer más"><span>Leer más</span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="single-from-blog">
                                        <figure>
                                            <a href="{{url('articles/' . $articles[5]->permalink)}}"><img
                                                        src="{{$articles[5]->img_url}}"
                                                        alt="img"></a>
                                        </figure>
                                        <div class="blog-title">
                                            <h2>
                                                <a href="{{url('articles/' . $articles[5]->permalink)}}">{{$articles[5]->title}}</a>
                                            </h2>
                                            <p>Publicado por <a class="blog-admin"
                                                                href="#">{{$articles[5]->user->name}}</a> el <span
                                                        class="blog-date">{{$articles[5]->created_at}}</span></p>
                                        </div>
                                        <p>{!!substr(html_entity_decode($articles[5]->body), 0, 90)!!}...</p>
                                        <div style="text-align: center!important;">
                                            <a href="{{url('articles/' . $articles[5]->permalink)}}"
                                               class="button button-default read-more" data-text="Leer más"><span>Leer más</span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="single-from-blog">
                                        <figure>
                                            <a href="{{url('articles/' . $articles[6]->permalink)}}"><img
                                                        src="{{$articles[6]->img_url}}"
                                                        alt="img"></a>
                                        </figure>
                                        <div class="blog-title">
                                            <h2>
                                                <a href="{{url('articles/' . $articles[6]->permalink)}}">{{$articles[6]->title}}</a>
                                            </h2>
                                            <p>Publicado por <a class="blog-admin"
                                                                href="#">{{$articles[6]->user->name}}</a> el <span
                                                        class="blog-date">{{$articles[6]->created_at}}</span></p>
                                        </div>
                                        <p>{!!substr(html_entity_decode($articles[6]->body), 0, 90)!!}...</p>
                                        <div style="text-align: center!important;">
                                            <a href="{{url('articles/' . $articles[6]->permalink)}}"
                                               class="button button-default read-more" data-text="Leer más"><span>Leer más</span></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="call-to-action">
        <img style="height: 315px;width: 100%;object-fit: cover" src="{{asset('images/bg1.jpg')}}" alt="img">
        <div class="call-to-overlay">
            <div class="container">
                <div class="call-to-content wow fadeInUp">
                    <h2>Lee todos nuestros artículos</h2>
                    <a style="font-family:Raleway, sans-serif" href="{{url('articles/')}}" class="button button-default"
                       data-text="Ver todos"><span>Ver todos</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Portfolio section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-area">
                        <div class="title-area">
                            <h2 class="tittle">Categorías</h2>
                            <span class="tittle-line"></span>
                            {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>--}}
                        </div>
                        <div class="portfolio-content">
                            {{--<div id="mixit-container" class="portfolio-container">--}}
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img style="object-fit: cover" src="{{asset('images/money.jpg')}}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Dinero</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix design">
                                    <div class="single-item">
                                        <img style="object-fit: cover" src="{{asset('images/card.jpg')}}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Tarjetas</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix development">
                                    <div class="single-item">
                                        <img style="object-fit: cover" src="{{asset('images/technology.jpg')}}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Tecnología</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix photography">
                                    <div class="single-item">
                                        <img style="object-fit: cover" src="{{asset('images/business.jpg')}}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Negocios</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection