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
    <!-- Start blog section -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="blog-left blog-details">
                                    <!-- Start single blog post -->
                                    <article class="single-from-blog">
                                        <div class="blog-title">
                                            <i class="fa fa-user"></i>
                                            <h1>{{$article->title}}</h1>
                                            <p>Publicado por <a href="#" class="blog-admin">{{$article->user->name}}</a>
                                                en <span class="blog-date">{{$article->created_at}}</span></p>
                                        </div>
                                        <figure>
                                            <a><img style="height: 500px; object-fit: contain"
                                                                            alt="{{$article->img_name}}" src="{{$article->img_url}}"></a>
                                        </figure>
                                        {{--<div class="blog-details-content" innerHTML="{{$article->body}}">--}}
                                        <div class="blog-details-content">
                                            {!!html_entity_decode($article->body)!!}
                                        </div>
                                        <p>Categoría: {{$article->categories[0]->name}}</p>
                                    </article>

                                Relacionados:
                                    <br>
                                @foreach($related_articles->articles as $related_article)
                                    <b>{{$related_article->title}}</b>
                                    {{$related_article->img_url}}
                                    {{$related_article->id}}
                                        <br>
                                @endforeach
                                    <!--<div class="blog-comment">-->
                                    <!--<h2>Post a comment</h2>-->
                                    <!--<form class="comment-form" action="">-->
                                    <!--<div class="form-group">-->
                                    <!--<input type="text" placeholder="Name" class="form-control">-->
                                    <!--</div>-->
                                    <!--<div class="form-group">-->
                                    <!--<input type="email" placeholder="Enter Email" class="form-control">-->
                                    <!--</div>-->
                                    <!--<div class="form-group">-->
                                    <!--<textarea class="form-control"></textarea>-->
                                    <!--</div>-->
                                    <!--<button class="button button-default" data-text="Comment" type="submit"><span>Comment</span></button>-->
                                    <!--</form>-->
                                    <!--</div>-->
                                    <!-- End single blog post -->
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-md-5 col-sm-12">-->
                            <!--<aside class="blog-right">-->
                            <!--&lt;!&ndash; Start Sidebar Single widget &ndash;&gt;-->
                            <!--<div class="single-widget">-->
                            <!--<h2>Search</h2>-->
                            <!--<form class="blog-search">-->
                            <!--<input type="text">-->
                            <!--<button class="button button-default" data-text="Search" type="submit"><span>Search</span></button>-->
                            <!--</form>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; End Sidebar Single widget &ndash;&gt;-->
                            <!--&lt;!&ndash; Start Sidebar Single widget &ndash;&gt;-->
                            <!--<div class="single-widget">-->
                            <!--<h2>Follow us on</h2>-->
                            <!--<div class="follow-us">-->
                            <!--<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>-->
                            <!--<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>-->
                            <!--<a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>-->
                            <!--<a class="youtube" href="#"><span class="fa fa-youtube"></span></a>-->
                            <!--<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>-->
                            <!--<a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; End Sidebar Single widget &ndash;&gt;-->
                            <!--&lt;!&ndash; Start Sidebar Single widget &ndash;&gt;-->
                            <!--<div class="single-widget">-->
                            <!--<h2>Popular post</h2>-->
                            <!--<div class="popular-post-widget">-->
                            <!--<div class="media">-->
                            <!--<div class="media-left">-->
                            <!--<a href="blog-single.html">-->
                            <!--<img class="media-object" src="../../assets/images/popular-post-img.jpg" alt="img">-->
                            <!--</a>-->
                            <!--</div>-->
                            <!--<div class="media-body">-->
                            <!--<h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>-->
                            <!--<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="media">-->
                            <!--<div class="media-left">-->
                            <!--<a href="blog-single.html">-->
                            <!--<img class="media-object" src="../../assets/images/popular-post-img.jpg" alt="img">-->
                            <!--</a>-->
                            <!--</div>-->
                            <!--<div class="media-body">-->
                            <!--<h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>-->
                            <!--<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="media">-->
                            <!--<div class="media-left">-->
                            <!--<a href="blog-single.html">-->
                            <!--<img class="media-object" src="../../assets/images/popular-post-img.jpg" alt="img">-->
                            <!--</a>-->
                            <!--</div>-->
                            <!--<div class="media-body">-->
                            <!--<h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>-->
                            <!--<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; End Sidebar Single widget &ndash;&gt;-->
                            <!--&lt;!&ndash; Start Sidebar Single widget &ndash;&gt;-->
                            <!--&lt;!&ndash;<div class="single-widget">&ndash;&gt;-->
                            <!--&lt;!&ndash;<h2>Instagram feed</h2>&ndash;&gt;-->
                            <!--&lt;!&ndash;<div class="instagram-feed">&ndash;&gt;-->
                            <!--&lt;!&ndash;<div class="single-instagram-feed">&ndash;&gt;-->
                            <!--&lt;!&ndash;<img src="assets/images/instagram-feed-img.jpg" alt="img">&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;<div class="single-instagram-feed">&ndash;&gt;-->
                            <!--&lt;!&ndash;<img src="assets/images/instagram-feed-img.jpg" alt="img">&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;<div class="single-instagram-feed">&ndash;&gt;-->
                            <!--&lt;!&ndash;<img src="assets/images/instagram-feed-img.jpg" alt="img">&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash; End Sidebar Single widget &ndash;&gt;-->
                            <!--&lt;!&ndash; Start Sidebar Single widget &ndash;&gt;-->
                            <!--<div class="single-widget">-->
                            <!--<h2>Subscribe to newslater</h2>-->
                            <!--<form class="blog-search">-->
                            <!--<input type="text">-->
                            <!--<button class="button button-default" data-text="Subscribe" type="submit"><span>Subscribe</span></button>-->
                            <!--</form>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; End Sidebar Single widget &ndash;&gt;-->
                            <!--</aside>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog section -->


@endsection
