@extends('layouts.app')
@section('title', $article->seo_title)
@section('meta-description',$article->seo_description)
@section('og-title', $article->seo_title)
@section('og-type', 'article')
@section('og-url', 'https://cmsweb.testing.info.ve/' . $article->permalink)
@section('og-image', $article->img_url)
@section('article-published_time', $article->created_at)
@section('article-modified_time', $article->created_at)
@section('article-tag', $article->keywords)
@section('article-author', $article->name)
@section('keywords', $article->keywords)

@section('content')
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="blog-left blog-details">
                                    <!-- Start single blog post -->
                                    <article class="single-from-blog">
                                        <div class="blog-title">
                                            <h1>{{$article->title}}</h1>
                                            <p>Publicado por <a href="#" class="blog-admin">{{$article->user->name}}</a>
                                                en <span class="blog-date">{{$article->created_at}}</span></p>
                                        </div>
                                        <figure>
                                            <a><img style="height: 500px; object-fit: contain"
                                                    alt="{{$article->img_name}}" src="{{$article->img_url}}"></a>
                                        </figure>
                                        <div class="blog-details-content">
                                            {!!html_entity_decode($article->body)!!}
                                        </div>
                                        <p>Categoría: <a href="{{url('/'.$article->categories[0]->name)}}">{{$article->categories[0]->name}}</a></p>
                                    </article>

                                        <h2 style="margin-left: 25px">Artículos Relacionados:</h2>
                                    <br>
                                    @foreach($related_articles->articles as $related_article)
                                        <div class="col-md-4">
                                            <article class="single-from-blog">
                                                <figure>
                                                    <a href="{{url('articles/' . $related_article->permalink)}}"><img
                                                                src="{{$related_article->img_url}}"
                                                                alt="{{$related_article->img_name}}"></a>
                                                </figure>
                                                <div class="blog-title">
                                                    <h2>
                                                        <a href="{{url('articles/' . $related_article->permalink)}}">{{$related_article->title}}</a>
                                                    </h2>
                                                </div>
                                                <p>{!!substr(html_entity_decode($related_article->body), 0, 150)!!}
                                                    ...</p>
                                            </article>
                                            <div style="text-align: center!important;">
                                                <a href="{{url('articles/' . $related_article->permalink)}}"
                                                   class="button button-default read-more"
                                                   data-text="Leer más"><span>Leer más</span></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog section -->


@endsection
