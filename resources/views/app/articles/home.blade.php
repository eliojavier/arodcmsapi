@extends('layouts.app')

@section('content')
    <div class="">
        <div class="container">
            <br>
            <div class="row no-padding">
                <div class="col-md-9 no-padding">
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[0]->articles[0]->img_url}}"
                             alt="{{$header_articles[0]->articles[0]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($header_articles[0]->permalink)}}"></a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[0]->articles[0]->permalink)}}"><h4
                                        style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[0]->articles[0]->title}}
                                </h4></a>
                        </div>
                    </div>
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[1]->articles[0]->img_url}}"
                             alt="{{$header_articles[1]->articles[0]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($header_articles[1]->permalink)}}"></a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[1]->articles[0]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[1]->articles[0]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[2]->articles[0]->img_url}}"
                             alt="{{$header_articles[1]->articles[0]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($header_articles[2]->permalink)}}"></a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[2]->articles[0]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[2]->articles[0]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-padding">
                <div class="col-md-9 no-padding">
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[3]->articles[0]->img_url}}"
                             alt="{{$header_articles[3]->articles[0]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($header_articles[3]->permalink)}}"></a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[0]->articles[0]->permalink)}}"><h4
                                        style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[3]->articles[0]->title}}
                                </h4></a>
                        </div>
                    </div>
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[4]->articles[0]->img_url}}"
                             alt="{{$header_articles[1]->articles[0]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($header_articles[4]->permalink)}}"></a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[4]->articles[0]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[4]->articles[0]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$header_articles[5]->articles[0]->img_url}}"
                             alt="{{$header_articles[1]->articles[0]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($header_articles[5]->permalink)}}"></a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $header_articles[5]->articles[0]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$header_articles[5]->articles[0]->title}}
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
                    <div class="col-md-6">
                        @php
                            $iteration = 0;
                        @endphp
                        @foreach($categories as $category)
                            @if ($iteration % 2 == 0)
                                <div class="col-md-12">
                                    <a href="{{url($category->permalink)}}">
                                        <h3 style="font-style: normal">{{$category->name}}</h3>
                                    </a>
                                    <article class="single-from-blog">
                                        <figure>
                                            <a href="{{url('articles/' . $category->articles[0]->permalink)}}">
                                                <img
                                                        class="home-images"
                                                        src="{{$category->articles[0]->img_url}}"
                                                        alt="{{$category->articles[0]->img_name}}"></a>
                                        </figure>
                                        <div class="blog-title">
                                            <h2 style="font-style: normal">
                                                <a href="{{url('articles/' . $category->articles[0]->permalink)}}">{{$category->articles[0]->title}}</a>
                                            </h2>
                                        </div>
                                        <div class="inner-styles">
                                            <p>{!!substr(html_entity_decode($category->articles[0]->body), 0, 150)!!}
                                                ...</p>
                                        </div>
                                    </article>
                                    @foreach($category->articles as $article)
                                        @if (!$loop->first)
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <figure>
                                                    <a href="{{url('articles/' . $article->permalink)}}"><img
                                                                class="little-images"
                                                                src="{{$article->img_url}}"
                                                                alt="{{$article->img_url}}"></a>
                                                </figure>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                <div class="blog-title">
                                                    <h4 style="margin: 0; font-size: 15px;font-weight: bold; font-style: normal">
                                                        <a href="{{url('articles/' . $article->permalink)}}">{{$article->title}}</a>
                                                    </h4>
                                                </div>
                                                <div class="inner-styles">
                                                    {!! \Illuminate\Support\Str::words($article->body, 15)!!}
                                                    {{--<p>{!!substr($article->body, 0, 90)!!}--}}
                                                        {{--...</p>--}}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div style="text-align: center!important;">
                                        <a style="font-style: normal" href="{{url($category->permalink)}}"
                                           class="button button-default read-more"
                                           data-text="Leer más"><span style="font-style: normal">Leer más</span></a>
                                    </div>
                                </div>
                            @endif
                            @php
                                $iteration = $iteration+1;
                            @endphp
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @php
                            $iteration = 0;
                        @endphp
                        @foreach($categories as $category)
                            @if ($iteration % 2 != 0)
                                <div class="col-md-12">
                                    <a href="{{url($category->permalink)}}">
                                        <h3 style="font-style: normal">{{$category->name}}</h3>
                                    </a>
                                    <article class="single-from-blog">
                                        <figure>
                                            <a href="{{url('articles/' . $category->articles[0]->permalink)}}"><img
                                                        class="home-images"
                                                        src="{{$category->articles[0]->img_url}}"
                                                        alt="{{$category->articles[0]->img_name}}"></a>
                                        </figure>
                                        <div class="blog-title">
                                            <h2 style="font-style: normal">
                                                <a href="{{url('articles/' . $category->articles[0]->permalink)}}">{{$category->articles[0]->title}}</a>
                                            </h2>
                                        </div>
                                        <div class="inner-styles">
                                            <p>{!!substr(html_entity_decode($category->articles[0]->body), 0, 150)!!}
                                                ...</p>
                                        </div>
                                    </article>
                                    @foreach($category->articles as $article)
                                        @if (!$loop->first)
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <figure>
                                                    <a href="{{url('articles/' . $article->permalink)}}"><img
                                                                class="little-images"
                                                                src="{{$article->img_url}}"
                                                                alt="{{$article->img_url}}"></a>
                                                </figure>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                <div class="blog-title">
                                                    <h4 style="margin: 0; font-size: 15px;font-weight: bold; font-style: normal">
                                                        <a href="{{url('articles/' . $article->permalink)}}">{{$article->title}}</a>
                                                    </h4>
                                                </div>
                                                <div class="inner-styles">
                                                    <p>{!!substr(html_entity_decode($article->body), 0, 90)!!}
                                                        ...</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div style="text-align: center!important;">
                                        <a style="font-style: normal" href="{{url($category->permalink)}}"
                                           class="button button-default read-more"
                                           data-text="Leer más"><span style="font-style: normal">Leer más</span></a>
                                    </div>
                                </div>
                            @endif
                            @php
                                $iteration = $iteration+1;
                            @endphp
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <a href="{{url('https://www.youtube.com/user/1984alrodri')}}" target="_blank">
                        <img style="width: 100%" src="{{asset('images/bannerHorizontal.jpeg')}}" alt="banner">
                    </a>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </section>
@endsection