@extends('layouts.app')

@section('content')
<div class="conteiner">
    <h1>Profile:</h1>
    <h2>{{ $user->username }}</h2>
    <h1>Articles:</h1>

    @foreach ($articles as $article)
        <a href="/articles/{{ $article->id }}"><h2>{{ $article->title }}</h2></a>
    @endforeach
</div>
@endsection
