<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

//use Illuminate\Support\Facades\Session;
use Validator;
use App\Post;

use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->Simplepaginate(15);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $title = Input::get('title');

        $body = Input::get('body');
        $slug = str_slug($title, '-');


        $data = [

            'title' => $title,
            'body' => $body,
            'slug' => $slug
        ];

        $rules = [
            'title' => 'required|max:255',
            'slug' => 'unique:posts',
            'body' => 'required'
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            Session::flash('error', 'gggggggggggg');

            return redirect()->back()->withInput($data)->withErrors($validator);
        } else {


            $post = new Post;

            $post->title = $title;
            $post->slug = $slug;
            $post->body = $body;

            $post->save();

            Session::flash('success', 'The blog post have successfully saved');

            return redirect()->route('post.show', $post->id);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {

        $title = Input::get('title');
        $slug = str_slug($title, '-');
        $body = Input::get('body');


        $checkSlug = Post::find($id);

        $data = [

            'title' => $title,
            'body' => $body,
            'slug' => $slug
        ];

        if ($title == $checkSlug->title) {
            $rules = [
                'title' => 'required|max:255',
                'body' => 'required',

            ];
        } else {

            $rules = [
                'title' => 'required|max:255',
                'body' => 'required',
                'slug' => 'unique:posts',

            ];



        }


        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            Session::flash('error', 'Error is Error');

            return redirect()->back()->withInput($data)->withErrors($validator);
        } else {


            $post = Post::find($id);

            $post->title = $title;
            $post->slug = $slug;
            $post->body = $body;

            $post->save();

            Session::flash('success', 'The blog post have successfully Updated');

            return redirect()->route('post.show', $post->id);

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function postDelete($id)
    {

        $post = Post::find($id);

        $post->delete();
        Session::flash('success', 'Post Was Successfully deleted!!');
        return redirect()->route('post.index');

    }
}
