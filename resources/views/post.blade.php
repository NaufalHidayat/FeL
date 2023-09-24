@extends('layouts.main')


@section('container')
<h2>{{ $post["title"] }}</h2>

<p><a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post["body"] !!}
    

<a href="/posts">Back to post</a>
@endsection