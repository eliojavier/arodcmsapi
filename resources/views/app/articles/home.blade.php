@extends('layouts.app')

@section('content')
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
@endsection