@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach($articles as $article)
                        <ul>
                            <a href="{{url('articles/' . $article->permalink)}}">
                                <li>{{$article->title}}</li>
                            </a>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection