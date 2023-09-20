@extends('layouts.main')


@section('container')
<h2>{{ $post["title"] }}</h2>
<h5>{{ $post["Language"] }}</h5>
<p>{{ $post["body"] }}</p>
    

<a href="/blog">Back to post</a>
@endsection