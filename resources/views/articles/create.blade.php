@extends('layouts.app')
@section('content')
<div class="conteiner">

    @if (Auth::check())
        <h1>Create New Article</h1>
        <form action="{{ url('/store') }}" method="post">
            @csrf
            <label for="title">Title:</label><input type="text" name="title" id="title"><br>
            <label for="body"><textarea name="body" id="body" cols="30" rows="10"></textarea></label><br>
            <input type="submit" value="Send">
        </form>
    @endif
</div>
@endsection
