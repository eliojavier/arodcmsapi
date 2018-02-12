@extends('layouts.app')

@section('content')
    <div>{{$article->user->name}}</div>
    <div>{{$article->categories[0]->name}}</div>
    <div>{{$article->title}}</div>
    <div>{{$article->created_at}}</div>
    <div>{{$article->body}}</div>
    <div>{{$article->seo_title}}</div>
    <div>{{$article->seo_description}}</div>
    <div>{{$article->keywords}}</div>
    <div>{{$article->img_url}}</div>

@endsection