<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store($user)
    {
        return auth()->user()->liking()->toggle($user);
    }
}
