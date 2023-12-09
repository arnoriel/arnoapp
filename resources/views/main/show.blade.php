@extends('main.layout')

@section('content')
<br>
<br>
<br>
<br>
<p class="text-dark"><a href="/main" class="text-dark">Beranda</a> > <a href="/artikel" class="text-dark">Artikel</a> > {{$article->title}}</p>
<h2><strong>{{$article->title}}</strong></h2>
<p class="small-text">Author: <strong>{{$article->creator->name}}</strong> | Created at: {{$article->date}}</p>
Bagikan:
<a link href="https://twitter.com" class="text-dark"><i class="bi bi-twitter-x"></i></a>
<a link href="https://facebook.com"><i class="bi bi-facebook"></i></a>
<a link href="https://instagram.com" class="text-danger"><i class="bi bi-instagram"></i></a>
<br>
<br>
<img src="{{$article->thumbnail()}}" alt="thumbnail" style="width: 500px;">
<p class="small-text">Image Source: {{$article->imgsrc}}</p>
<br>
<p>{!! $article->content !!}</p>
@endsection