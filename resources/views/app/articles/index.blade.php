@extends('layouts.app')

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-body">--}}
{{--@foreach($articles as $article)--}}
{{--<ul>--}}
{{--<a href="{{url('articles/' . $article->permalink)}}">--}}
{{--<li>{{$article->title}}</li>--}}
{{--</a>--}}
{{--</ul>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@section('content')
    <div id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="blog-left blog-archive">
                                    <!-- Start single blog post -->
                                    @foreach($articles as $article)
                                        <article class="single-from-blog">
                                            <figure>
                                                <a href="{{url('articles/' . $article->permalink)}}"><img alt="img" style="object-fit: cover"
                                                                                                          src="{{$article->img_url}}"></a>
                                            </figure>
                                            <div class="blog-title">
                                                <h2 style="font-style: normal!important;">
                                                    <a href="{{url('articles/' . $article->permalink)}}">{{$article->title}}</a>
                                                </h2>
                                                <p style="font-style: normal!important;">Publicado por <a class="blog-admin">{{$article->user->name}}</a> on
                                                    <span
                                                            class="blog-date">{{$article->created_at}}</span></p>
                                            </div>
                                            <p>{!!substr(html_entity_decode($article->body), 0, 200)!!}... <a
                                                        href="{{url('articles/' . $article->permalink)}}">Leer más</a>
                                            </p>
                                            </p>
                                            {{--<div class="blog-footer">--}}
                                                {{--<a href="#"><span class="fa fa-comment"></span>18 Comments</a>--}}
                                                {{--<a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>--}}
                                            {{--</div>--}}
                                        </article>
                                @endforeach
                                <!-- End single blog post -->
                                    <!--Start Blog pagination -->
                                    <nav>
                                        <ul style="border-radius: 0px!important" class="pagination blog-pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- End blog pagination -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12">
                                <aside class="blog-right">
                                    <!-- Start Sidebar Single widget -->
                                    {{--<div class="single-widget">--}}
                                        {{--<h2>Search</h2>--}}
                                        {{--<form class="blog-search">--}}
                                            {{--<input type="text">--}}
                                            {{--<button class="button button-default" data-text="Search" type="submit">--}}
                                                {{--<span>Search</span>--}}
                                            {{--</button>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                    <!-- End Sidebar Single widget -->
                                    <!-- Start Sidebar Single widget -->
                                    <div class="single-widget">
                                        <h2>Síguenos en</h2>
                                        <div class="follow-us">
                                            <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                                            <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                                            <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                                            <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                                            <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                                            <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
                                        </div>
                                    </div>
                                    <!-- End Sidebar Single widget -->
                                    <!-- Start Sidebar Single widget -->
                                    {{--<div class="single-widget">--}}
                                        {{--<h2>Popular post</h2>--}}
                                        {{--<div class="popular-post-widget">--}}
                                            {{--<div class="media">--}}
                                                {{--<div class="media-left">--}}
                                                    {{--<a href="blog-single.html">--}}
                                                        {{--<img class="media-object"--}}
                                                             {{--src="assets/images/popular-post-img.jpg"--}}
                                                             {{--alt="img">--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading"><a href="blog-single.html">A lonely--}}
                                                            {{--flower</a>--}}
                                                    {{--</h4>--}}
                                                    {{--<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium--}}
                                                        {{--done.</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media">--}}
                                                {{--<div class="media-left">--}}
                                                    {{--<a href="blog-single.html">--}}
                                                        {{--<img class="media-object"--}}
                                                             {{--src="assets/images/popular-post-img.jpg"--}}
                                                             {{--alt="img">--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading"><a href="blog-single.html">A lonely--}}
                                                            {{--flower</a>--}}
                                                    {{--</h4>--}}
                                                    {{--<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium--}}
                                                        {{--done.</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media">--}}
                                                {{--<div class="media-left">--}}
                                                    {{--<a href="blog-single.html">--}}
                                                        {{--<img class="media-object"--}}
                                                             {{--src="assets/images/popular-post-img.jpg"--}}
                                                             {{--alt="img">--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading"><a href="blog-single.html">A lonely--}}
                                                            {{--flower</a>--}}
                                                    {{--</h4>--}}
                                                    {{--<p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium--}}
                                                        {{--done.</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <!-- End Sidebar Single widget -->
                                    <!-- Start Sidebar Single widget -->
                                    {{--<div class="single-widget">--}}
                                        {{--<h2>Instagram feed</h2>--}}
                                        {{--<div class="instagram-feed">--}}
                                            {{--<div class="single-instagram-feed">--}}
                                                {{--<img src="assets/images/instagram-feed-img.jpg" alt="img">--}}
                                            {{--</div>--}}
                                            {{--<div class="single-instagram-feed">--}}
                                                {{--<img src="assets/images/instagram-feed-img.jpg" alt="img">--}}
                                            {{--</div>--}}
                                            {{--<div class="single-instagram-feed">--}}
                                                {{--<img src="assets/images/instagram-feed-img.jpg" alt="img">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <!-- End Sidebar Single widget -->
                                    <!-- Start Sidebar Single widget -->
                                    <div class="single-widget">
                                        <h2>Suscríbete aquí</h2>
                                        <form class="blog-search">
                                            <input type="text">
                                            <button class="button button-default" data-text="Suscribir" type="submit">
                                                <span>Suscribir</span>
                                            </button>
                                        </form>
                                    </div>
                                    <!-- End Sidebar Single widget -->
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection