@extends('layouts.app')

@section('content')

    {{--@foreach($header_categories as $header_category)--}}
        {{--@foreach($header_category as $category)--}}
            {{--{{$category->name}}--}}
            {{--{{($category->articles[0]->title)}}--}}
            {{--{{$category->name}}--}}
            {{--{{dd($category->articles)}}--}}
        {{--@endforeach--}}
    {{--@endforeach--}}
    {{--{{dd($header_articles[0])}}--}}
    {{--@foreach($result as $categories)--}}
        {{--@foreach($categories as $category)--}}
            {{--<b>{{($category->name)}}</b>--}}
            {{--@foreach($category->articles as $article)--}}
                {{--{{($article->title)}}--}}
            {{--@endforeach--}}
        {{--@endforeach--}}
    {{--@endforeach--}}
    {{--{{dd($categories)}}--}}
    <div class="">
        <div class="container">
            <br>
            <div class="row no-padding">
                <div class="col-md-4 no-padding portfolio-section">
                    <img class="full-width img-responsive images"
                         style="height:480px; width:100%;object-fit: cover"
                         src="{{$header_articles[0]->img_url}}" alt="{{$header_articles[0]->img_name}}">
                    <div class="overlay">
                        <div class="overlay-text">
                            <a href="{{url('articles/' . $header_articles[0]->permalink)}}">Ver más</a>
                        </div>
                    </div>
                    <div class="text">
                        <a href="{{url('articles/' . $header_articles[0]->permalink)}}"><h4
                                    style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                {{$header_articles[0]->title}}
                            </h4></a>
                    </div>
                </div>
                <div class="col-md-4 no-padding portfolio-section">
                    <img class="full-width img-responsive images"
                         style="height:480px; width:100%;object-fit: cover"
                         src="{{$header_articles[1]->img_url}}" alt="Articulo 2">
                    <div class="overlay">
                        <div class="overlay-text">
                            <a href="{{url('articles/' . $header_articles[1]->permalink)}}">Ver más</a>
                        </div>
                    </div>
                    <div class="text">
                        <a href="{{url('articles/' . $header_articles[1]->permalink)}}"><h4
                                    style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                {{$header_articles[1]->title}}
                            </h4></a>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[2]->img_url}}" alt="Articulo 3">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url('articles/' . $header_articles[2]->permalink)}}">Ver más</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[2]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[2]->title}}
                                </h4></a>
                        </div>
                    </div>
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images" src="{{$header_articles[3]->img_url}}"
                             style="height:240px; width:100%;object-fit: cover"
                             alt="Articulo 4">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url('articles/' . $header_articles[3]->permalink)}}">Ver más</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[3]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[3]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{--****************************************************--}}



    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    @php
                        $iteration = 0
                    @endphp

                @foreach($result as $categories)
                            @foreach($categories as $category)
                            <div class="col-md-6" style="{{$iteration %2 ==0 ? 'float:left' : 'float:right'}}">

                            <h3>{{$category->name}}</h3>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $category->articles[0]->permalink)}}"><img
                                                src="{{$category->articles[0]->img_url}}"
                                                alt="{{$category->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $category->articles[0]->permalink)}}">{{$category->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($category->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            @for ($i = 1; $i <= count($category->articles) -1; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $category->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$category->articles[$i]->img_url}}"
                                                    alt="{{$category->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $category->articles[$i]->permalink)}}">{{$category->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($category->articles[$i]->body), 0, 90)!!}...</p>
                                </div>
                            @endfor
                                <div style="text-align: center!important;">
                                    <a href="{{url('articles/' . $category->articles[0]->permalink)}}"
                                       class="button button-default read-more"
                                       data-text="Leer más"><span>Leer más</span></a>
                                </div>
                            </div>
                            @php
                                $iteration++
                            @endphp
                            @endforeach
                        @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img style="width: 100%" src="{{asset('images/banner.png')}}" alt="banner">
                    <img style="width: 100%" src="{{asset('images/banner.png')}}" alt="banner">
                    <img style="width: 100%" src="{{asset('images/banner.png')}}" alt="banner">
                </div>
            </div>
        </div>
    </section>






    {{--****************************************************--}}
    {{--<section id="from-blog">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="from-blog-area">--}}
                        {{--<div class="from-blog-content">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<article class="single-from-blog">--}}
                                        {{--<figure>--}}
                                            {{--<a href="{{url('articles/' . $articles[4]->permalink)}}"><img--}}
                                                        {{--src="{{$articles[4]->img_url}}"--}}
                                                        {{--alt="img"></a>--}}
                                        {{--</figure>--}}
                                        {{--<div class="blog-title">--}}
                                            {{--<h2>--}}
                                                {{--<a href="{{url('articles/' . $articles[4]->permalink)}}">{{$articles[4]->title}}</a>--}}
                                            {{--</h2>--}}
                                            {{--<p>Publicado por <a class="blog-admin"--}}
                                                                {{--href="#">{{$articles[4]->user->name}}</a> el <span--}}
                                                        {{--class="blog-date">{{$articles[4]->created_at}}</span></p>--}}
                                        {{--</div>--}}
                                        {{--<p>{!!substr(html_entity_decode($articles[4]->body), 0, 90)!!}...</p>--}}
                                        {{--<div style="text-align: center!important;">--}}
                                            {{--<a href="{{url('articles/' . $articles[4]->permalink)}}"--}}
                                               {{--class="button button-default read-more" data-text="Leer más"><span>Leer más</span></a>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<article class="single-from-blog">--}}
                                        {{--<figure>--}}
                                            {{--<a href="{{url('articles/' . $articles[5]->permalink)}}"><img--}}
                                                        {{--src="{{$articles[5]->img_url}}"--}}
                                                        {{--alt="img"></a>--}}
                                        {{--</figure>--}}
                                        {{--<div class="blog-title">--}}
                                            {{--<h2>--}}
                                                {{--<a href="{{url('articles/' . $articles[5]->permalink)}}">{{$articles[5]->title}}</a>--}}
                                            {{--</h2>--}}
                                            {{--<p>Publicado por <a class="blog-admin"--}}
                                                                {{--href="#">{{$articles[5]->user->name}}</a> el <span--}}
                                                        {{--class="blog-date">{{$articles[5]->created_at}}</span></p>--}}
                                        {{--</div>--}}
                                        {{--<p>{!!substr(html_entity_decode($articles[5]->body), 0, 90)!!}...</p>--}}
                                        {{--<div style="text-align: center!important;">--}}
                                            {{--<a href="{{url('articles/' . $articles[5]->permalink)}}"--}}
                                               {{--class="button button-default read-more" data-text="Leer más"><span>Leer más</span></a>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<article class="single-from-blog">--}}
                                        {{--<figure>--}}
                                            {{--<a href="{{url('articles/' . $articles[6]->permalink)}}"><img--}}
                                                        {{--src="{{$articles[6]->img_url}}"--}}
                                                        {{--alt="img"></a>--}}
                                        {{--</figure>--}}
                                        {{--<div class="blog-title">--}}
                                            {{--<h2>--}}
                                                {{--<a href="{{url('articles/' . $articles[6]->permalink)}}">{{$articles[6]->title}}</a>--}}
                                            {{--</h2>--}}
                                            {{--<p>Publicado por <a class="blog-admin"--}}
                                                                {{--href="#">{{$articles[6]->user->name}}</a> el <span--}}
                                                        {{--class="blog-date">{{$articles[6]->created_at}}</span></p>--}}
                                        {{--</div>--}}
                                        {{--<p>{!!substr(html_entity_decode($articles[6]->body), 0, 90)!!}...</p>--}}
                                        {{--<div style="text-align: center!important;">--}}
                                            {{--<a href="{{url('articles/' . $articles[6]->permalink)}}"--}}
                                               {{--class="button button-default read-more" data-text="Leer más"><span>Leer más</span></a>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section id="call-to-action">--}}
        {{--<img style="height: 315px;width: 100%;object-fit: cover" src="{{asset('images/bg1.jpg')}}" alt="img">--}}
        {{--<div class="call-to-overlay">--}}
            {{--<div class="container">--}}
                {{--<div class="call-to-content wow fadeInUp">--}}
                    {{--<h2>Lee todos nuestros artículos</h2>--}}
                    {{--<a style="font-family:Raleway, sans-serif" href="{{url('articles/')}}" class="button button-default"--}}
                       {{--data-text="Ver todos"><span>Ver todos</span></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- Start Portfolio section -->--}}
    {{--<section id="portfolio">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="portfolio-area">--}}
                        {{--<div class="title-area">--}}
                            {{--<h2 class="tittle">Categorías</h2>--}}
                            {{--<span class="tittle-line"></span>--}}
                            {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-content">--}}
                            {{--<div id="mixit-container" class="portfolio-container">--}}
                            {{--<div class="single-portfolio mix branding">--}}
                                {{--<div class="single-item">--}}
                                    {{--<img style="object-fit: cover" src="{{asset('images/money.jpg')}}" alt="img">--}}
                                    {{--<div class="single-item-content">--}}
                                        {{--<div class="portfolio-social-icon">--}}
                                        {{--</div>--}}
                                        {{--<div class="portfolio-title">--}}
                                            {{--<h4>Dinero</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="single-portfolio mix design">--}}
                                {{--<div class="single-item">--}}
                                    {{--<img style="object-fit: cover" src="{{asset('images/card.jpg')}}" alt="img">--}}
                                    {{--<div class="single-item-content">--}}
                                        {{--<div class="portfolio-social-icon">--}}
                                        {{--</div>--}}
                                        {{--<div class="portfolio-title">--}}
                                            {{--<h4>Tarjetas</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="single-portfolio mix development">--}}
                                {{--<div class="single-item">--}}
                                    {{--<img style="object-fit: cover" src="{{asset('images/technology.jpg')}}" alt="img">--}}
                                    {{--<div class="single-item-content">--}}
                                        {{--<div class="portfolio-social-icon">--}}
                                        {{--</div>--}}
                                        {{--<div class="portfolio-title">--}}
                                            {{--<h4>Tecnología</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="single-portfolio mix photography">--}}
                                {{--<div class="single-item">--}}
                                    {{--<img style="object-fit: cover" src="{{asset('images/business.jpg')}}" alt="img">--}}
                                    {{--<div class="single-item-content">--}}
                                        {{--<div class="portfolio-social-icon">--}}
                                        {{--</div>--}}
                                        {{--<div class="portfolio-title">--}}
                                            {{--<h4>Negocios</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection