<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;


class PostController extends Controller
{
    public function post() {
        $categories = Post::where('category_id','=',2)->get()->toArray();
        dd($categories);
    }
}
