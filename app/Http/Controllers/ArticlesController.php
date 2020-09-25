<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        $articles = $user->articles;
        return view('articles/index', compact('user', 'articles'));
    }

    public function create()
    {
        return view('articles/create');
    }

    public function store()
    {
        $data = request()->validate([
        'title' => 'required',
        'body' => 'required',
    ]);

        auth()->user()->articles()->create([
        'title' => $data['title'],
        'body' => $data['body'],
        ]);
    }
}
