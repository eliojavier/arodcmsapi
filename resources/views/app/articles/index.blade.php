@extends('layouts.app')

@section('content')
    <div id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="blog-left blog-archive">
                                    <!-- Start single blog post -->
                                    @foreach($articles as $article)
                                        <article class="single-from-blog">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <figure>
                                                    <a href="{{url('articles/' . $article->permalink)}}"><img alt="img"
                                                                                                              style="object-fit: cover"
                                                                                                              src="{{$article->img_url}}"></a>
                                                </figure>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="blog-title">
                                                    <h2 style="font-style: normal!important;">
                                                        <a href="{{url('articles/' . $article->permalink)}}">{{$article->title}}</a>
                                                    </h2>
                                                    <p style="font-style: normal!important;">Publicado por <a
                                                                class="blog-admin">{{$article->user->name}}</a> on
                                                        <span
                                                                class="blog-date">{{$article->created_at}}</span></p>
                                                </div>
                                                <p>{!!substr(html_entity_decode($article->body), 0, 200)!!}... <a
                                                            href="{{url('articles/' . $article->permalink)}}">Leer
                                                        más</a>
                                                </p>
                                            </div>
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
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <aside class="blog-right">

                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection