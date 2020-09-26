@extends('layouts.app') @section('content')
<div class="container">
    @if (Auth::check())
    <h1>Your Profile</h1>
    <h2>{{ Auth::User()->username }}</h2>
    <a href="/create"><h2>New Article</h2></a>
    @else
    <h1>You are not Logged</h1>
    @endif

    <div class="homeArticles">
        <h1>Articles:</h1>
        @foreach ($articles as $article)
        <a href="/articles/{{ $article->id }}"
            ><h2>{{ $article->title }}</h2></a
        >
        @endforeach
    </div>
</div>
@endsection
