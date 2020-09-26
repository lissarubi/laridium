@extends('layouts.app')
@section('content')
<header>
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
</header>
<body>
    <div class="showConteiner">
        <h1 class="showTitle">{{ $article->title }}</h1>
        <div class="showBody">{{ $article->body }}</div>
    </div>
</body>
@endsection
