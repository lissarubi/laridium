@extends('layouts.app')
@section('content')

<header>
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
</header>

<body>

<div class="createArticles">

    <div class="content">
    @if (Auth::check())
        <h1>Create New Article</h1>
        <form action="{{ url('/store') }}" method="post" class="createForm">
            @csrf
            <input type="text" placeholder="Title" class="title" name="title" id="title"><br>
            <textarea name="body" placeholder="Body" class="body" id="body" cols="100" rows="30"></textarea><br>
            <input type="submit" class="submit" value="Send">
        </form>
    @endif
</div>

</body>
@endsection
