<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Post $post)
    {
    	return auth()->user()->canlike()->toggle($post);
    }
}
