<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::with("user")->orderBy('created_at', 'desc')->get();

        return view('index', compact("posts"));
    }
}
