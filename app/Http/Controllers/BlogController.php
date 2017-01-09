<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug){

//        $post=Post::find($slug);
        $post=Post::where('slug','=',$slug)->first();

//        return $post;

        return view('blog.single')->withPost($post);

    }
}
