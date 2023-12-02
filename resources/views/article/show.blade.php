@extends('layouts.admin')
@section('content')
    <h2><strong>{{$article->title}}</strong></h2>
    <p class="small-text">Author: {{$article->creator->name}} | Created at: {{$article->date}}</p>
    <br>
    <img src="{{$article->thumbnail()}}" alt="thumbnail" style="width: 500px;">
    <p class="small-text">Image Source: {{$article->imgsrc}}</p>
    <br>
    <p>{!! $article->content !!}</p>
@endsection