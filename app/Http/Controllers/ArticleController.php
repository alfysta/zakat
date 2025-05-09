<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        
        return view('home.articles', [
            'articles' => Post::latest()->simplePaginate(10)
        ]);
    }

    public function show(Post $post){

        return view('home.single-article',[
            'post' => $post,
        ]);

    }
}
