@extends('layouts.app')

@section('content')
    {{--<div class="">--}}
    {{--<div class="container">--}}
    {{--<br>--}}
    {{--<div class="row no-padding">--}}
    {{--<div class="col-md-4 no-padding portfolio-section">--}}
    {{--<img class="full-width img-responsive images"--}}
    {{--style="height:480px; width:100%;object-fit: cover"--}}
    {{--src="{{$header_articles[0]->img_url}}" alt="{{$header_articles[0]->img_name}}">--}}
    {{--<div class="overlay">--}}
    {{--<div class="overlay-text">--}}
    {{--<a href="{{url('articles/' . $header_articles[0]->permalink)}}">Ver más</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text">--}}
    {{--<a href="{{url('articles/' . $header_articles[0]->permalink)}}"><h4--}}
    {{--style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">--}}
    {{--{{$header_articles[0]->title}}--}}
    {{--</h4></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 no-padding portfolio-section">--}}
    {{--<img class="full-width img-responsive images"--}}
    {{--style="height:480px; width:100%;object-fit: cover"--}}
    {{--src="{{$header_articles[1]->img_url}}" alt="Articulo 2">--}}
    {{--<div class="overlay">--}}
    {{--<div class="overlay-text">--}}
    {{--<a href="{{url('articles/' . $header_articles[1]->permalink)}}">Ver más</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text">--}}
    {{--<a href="{{url('articles/' . $header_articles[1]->permalink)}}"><h4--}}
    {{--style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">--}}
    {{--{{$header_articles[1]->title}}--}}
    {{--</h4></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 no-padding">--}}
    {{--<div class="col-md-12 no-padding portfolio-section">--}}
    {{--<img class="full-width img-responsive images"--}}
    {{--style="height:240px; width:100%;object-fit: cover"--}}
    {{--src="{{$header_articles[2]->img_url}}" alt="Articulo 3">--}}
    {{--<div class="overlay">--}}
    {{--<div class="overlay-text">--}}
    {{--<a href="{{url('articles/' . $header_articles[2]->permalink)}}">Ver más</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text">--}}
    {{--<a href="{{url('articles/' . $header_articles[2]->permalink)}}"><h4--}}
    {{--style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">--}}
    {{--{{$header_articles[2]->title}}--}}
    {{--</h4></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-12 no-padding portfolio-section">--}}
    {{--<img class="full-width img-responsive images" src="{{$header_articles[3]->img_url}}"--}}
    {{--style="height:240px; width:100%;object-fit: cover"--}}
    {{--alt="Articulo 4">--}}
    {{--<div class="overlay">--}}
    {{--<div class="overlay-text">--}}
    {{--<a href="{{url('articles/' . $header_articles[3]->permalink)}}">Ver más</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text">--}}
    {{--<a href="{{url('articles/' . $header_articles[3]->permalink)}}"><h4--}}
    {{--style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">--}}
    {{--{{$header_articles[3]->title}}--}}
    {{--</h4></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="">
        <div class="container">
            <br>
            <div class="row no-padding">
                <div class="col-md-9 no-padding">
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$categories[0]->articles[1]->img_url}}"
                             alt="{{$categories[0]->articles[1]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($categories[0]->name)}}">{{$categories[0]->name}}</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $categories[0]->articles[1]->permalink)}}"><h4
                                        style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$categories[0]->articles[1]->title}}
                                </h4></a>
                        </div>
                    </div>
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$categories[1]->articles[1]->img_url}}" alt="Articulo 2">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($categories[1]->name)}}">{{$categories[1]->name}}</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $categories[1]->articles[1]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$categories[1]->articles[1]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$categories[2]->articles[1]->img_url}}" alt="Articulo 3">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($categories[2]->name)}}">{{$categories[2]->name}}</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $categories[2]->articles[1]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$categories[2]->articles[1]->title}}
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
                             src="{{$categories[3]->articles[1]->img_url}}"
                             alt="{{$categories[3]->articles[1]->img_name}}">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($categories[3]->name)}}">{{$categories[3]->name}}</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $categories[3]->articles[1]->permalink)}}"><h4
                                        style="cursor: pointer;background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$categories[3]->articles[1]->title}}
                                </h4></a>
                        </div>
                    </div>
                    <div class="col-md-6 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$categories[4]->articles[1]->img_url}}" alt="Articulo 2">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($categories[4]->name)}}">{{$categories[4]->name}}</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $categories[4]->articles[1]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$categories[4]->articles[1]->title}}
                                </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="col-md-12 no-padding portfolio-section">
                        <img class="full-width img-responsive images"
                             style="height:240px; width:100%;object-fit: cover"
                             src="{{$categories[5]->articles[1]->img_url}}" alt="Articulo 3">
                        <div class="overlay">
                            <div class="overlay-text">
                                <a href="{{url($categories[5]->name)}}">{{$categories[5]->name}}</a>
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{url('articles/' . $categories[5]->articles[1]->permalink)}}"><h4
                                        style="background: rgba(0, 0, 0, 0.7); width: 100%; margin-top: -50px; padding: 15px">
                                    {{$categories[5]->articles[1]->title}}
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
                    {{--@foreach($result as $categories)--}}
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url($categories[0]->name)}}">
                                <h3>{{$categories[0]->name}}</h3>
                            </a>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $categories[0]->articles[0]->permalink)}}"><img
                                                src="{{$categories[0]->articles[0]->img_url}}"
                                                alt="{{$categories[0]->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $categories[0]->articles[0]->permalink)}}">{{$categories[0]->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($categories[0]->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            {{--@for ($i = 1; $i <= count($categories[0]->articles) -1; $i++)--}}
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $categories[0]->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$categories[0]->articles[$i]->img_url}}"
                                                    alt="{{$categories[0]->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $categories[0]->articles[$i]->permalink)}}">{{$categories[0]->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($categories[0]->articles[$i]->body), 0, 90)!!}
                                        ...</p>
                                </div>
                            @endfor
                            <div style="text-align: center!important;">
                                <a href="{{url($categories[0]->name)}}"
                                   class="button button-default read-more"
                                   data-text="Leer más"><span>Leer más</span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{url($categories[1]->name)}}">
                                <h3>{{$categories[1]->name}}</h3>
                            </a>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $categories[1]->articles[0]->permalink)}}"><img
                                                src="{{$categories[1]->articles[0]->img_url}}"
                                                alt="{{$categories[1]->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $categories[1]->articles[0]->permalink)}}">{{$categories[1]->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($categories[1]->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            {{--@for ($i = 1; $i <= count($categories[0]->articles) -1; $i++)--}}
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $categories[1]->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$categories[1]->articles[$i]->img_url}}"
                                                    alt="{{$categories[1]->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $categories[1]->articles[$i]->permalink)}}">{{$categories[1]->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($categories[1]->articles[$i]->body), 0, 90)!!}
                                        ...</p>
                                </div>
                            @endfor
                            <div style="text-align: center!important;">
                                <a href="{{url($categories[1]->name)}}"
                                   class="button button-default read-more"
                                   data-text="Leer más"><span>Leer más</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url($categories[2]->name)}}">
                                <h3>{{$categories[2]->name}}</h3>
                            </a>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $categories[2]->articles[0]->permalink)}}"><img
                                                src="{{$categories[2]->articles[0]->img_url}}"
                                                alt="{{$categories[2]->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $categories[2]->articles[0]->permalink)}}">{{$categories[2]->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($categories[2]->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            {{--@for ($i = 1; $i <= count($categories[0]->articles) -1; $i++)--}}
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $categories[2]->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$categories[2]->articles[$i]->img_url}}"
                                                    alt="{{$categories[2]->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $categories[2]->articles[$i]->permalink)}}">{{$categories[2]->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($categories[2]->articles[$i]->body), 0, 90)!!}
                                        ...</p>
                                </div>
                            @endfor
                            <div style="text-align: center!important;">
                                <a href="{{url($categories[2]->name)}}"
                                   class="button button-default read-more"
                                   data-text="Leer más"><span>Leer más</span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{url($categories[3]->name)}}">
                                <h3>{{$categories[3]->name}}</h3>
                            </a>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $categories[3]->articles[0]->permalink)}}"><img
                                                src="{{$categories[3]->articles[0]->img_url}}"
                                                alt="{{$categories[3]->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $categories[3]->articles[0]->permalink)}}">{{$categories[3]->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($categories[3]->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            {{--@for ($i = 1; $i <= count($categories[0]->articles) -1; $i++)--}}
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $categories[3]->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$categories[3]->articles[$i]->img_url}}"
                                                    alt="{{$categories[3]->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $categories[3]->articles[$i]->permalink)}}">{{$categories[3]->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($categories[3]->articles[$i]->body), 0, 90)!!}
                                        ...</p>
                                </div>
                            @endfor
                            <div style="text-align: center!important;">
                                <a href="{{url($categories[3]->name)}}"
                                   class="button button-default read-more"
                                   data-text="Leer más"><span>Leer más</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url($categories[4]->name)}}">
                                <h3>{{$categories[4]->name}}</h3>
                            </a>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $categories[4]->articles[0]->permalink)}}"><img
                                                src="{{$categories[4]->articles[0]->img_url}}"
                                                alt="{{$categories[4]->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $categories[4]->articles[0]->permalink)}}">{{$categories[4]->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($categories[4]->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            {{--@for ($i = 1; $i <= count($categories[0]->articles) -1; $i++)--}}
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $categories[4]->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$categories[4]->articles[$i]->img_url}}"
                                                    alt="{{$categories[4]->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $categories[4]->articles[$i]->permalink)}}">{{$categories[4]->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($categories[4]->articles[$i]->body), 0, 90)!!}
                                        ...</p>
                                </div>
                            @endfor
                            <div style="text-align: center!important;">
                                <a href="{{url($categories[4]->name)}}"
                                   class="button button-default read-more"
                                   data-text="Leer más"><span>Leer más</span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{url($categories[5]->name)}}">
                                <h3>{{$categories[5]->name}}</h3>
                            </a>
                            <article class="single-from-blog">
                                <figure>
                                    <a href="{{url('articles/' . $categories[5]->articles[0]->permalink)}}"><img
                                                src="{{$categories[5]->articles[0]->img_url}}"
                                                alt="{{$categories[5]->articles[0]->img_name}}"></a>
                                </figure>
                                <div class="blog-title">
                                    <h2>
                                        <a href="{{url('articles/' . $categories[5]->articles[0]->permalink)}}">{{$categories[5]->articles[0]->title}}</a>
                                    </h2>
                                </div>
                                <p>{!!substr(html_entity_decode($categories[5]->articles[0]->body), 0, 150)!!}...</p>
                            </article>
                            {{--@for ($i = 1; $i <= count($categories[0]->articles) -1; $i++)--}}
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure>
                                        <a href="{{url('articles/' . $categories[5]->articles[$i]->permalink)}}"><img
                                                    style="width: 100%"
                                                    src="{{$categories[5]->articles[$i]->img_url}}"
                                                    alt="{{$categories[5]->articles[$i]->img_url}}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog-title">
                                        <h4 style="margin: 0; font-size: 15px;font-weight: bold">
                                            <a href="{{url('articles/' . $categories[5]->articles[$i]->permalink)}}">{{$categories[5]->articles[$i]->title}}</a>
                                        </h4>
                                    </div>
                                    <p>{!!substr(html_entity_decode($categories[5]->articles[$i]->body), 0, 90)!!}
                                        ...</p>
                                </div>
                            @endfor
                            <div style="text-align: center!important;">
                                <a href="{{url($categories[5]->name)}}"
                                   class="button button-default read-more"
                                   data-text="Leer más"><span>Leer más</span></a>
                            </div>
                        </div>
                    </div>

                    {{--@endforeach--}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <a href="{{url('https://www.youtube.com/user/1984alrodri')}}" target="_blank">
                        <img style="width: 100%" src="{{asset('images/bannerHorizontal.jpeg')}}" alt="banner">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection