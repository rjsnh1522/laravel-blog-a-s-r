@extends('layouts.master')

@section('title')
    <title>My Blog |{{$post->title}}</title>
    @endsection

    @section('content')
    <div class="row skinny_wrapper" id="post_show_content">
        <header>
            <p class="date">{{date('F j, Y',strtotime($post->created_at))}}</p>
            <h1>{{$post->title}}</h1>
            <hr>
        </header>
        <div id="content">
            <p>{{$post->body}}</p>
            <hr>
            <div id="share_box">
                <p>Share The Do List</p>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i>
                </a>
                <a href="#"><i class="fa fa-google-plus"></i>
                </a>
            </div>
            <hr>
        </div>
    </div>



@endsection
