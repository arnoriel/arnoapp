@extends('layouts.admin')
@section('content')
    <h2><strong>{{ $article->title }}</strong></h2>
    <p class="small-text">Author: {{ $article->creator->name }} | Created at: {{ $article->date }}</p>
    Bagikan:
    <a href="https://facebook.com" target="_blank"><img src="{{ asset('images/aset/fb.png') }}" alt="facebook"
            style="width: 30px;"></a>
    <a href="https://instagram.com" target="_blank"><img src="{{ asset('images/aset/ig.png') }}" alt="facebook"
            style="width: 30px;"></a>
    <a href="https://twitter.com" target="_blank"><img src="{{ asset('images/aset/x.png') }}" alt="facebook"
            style="width: 30px;"></a>
    <br>
    <br>
    <img src="{{ $article->thumbnail() }}" alt="thumbnail" style="width: 500px;">
    <p class="small-text">Image Source: {{ $article->imgsrc }}</p>
    <br>
    <p>{!! $article->content !!}</p>
@endsection
