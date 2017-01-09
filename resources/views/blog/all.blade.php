@extends('layouts.master')

@section('title')
    <title>My Blog | All Post</title>
@endsection

@section('content')
    <div class="row skinny_wrapper" id="post_show_content">
        <header>
            @foreach( $data['post'] as $post)
            <div class="singleBlogTitle">
            <p class="date">{{date('F j, Y',strtotime($post->created_at))}}</p>
            <h3 class="blog-title"><a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a></h3>
            </div>
                <hr>
                @endforeach
        </header>

        <div>
            {{$data['post']->links()}}
        </div>
    </div>



@endsection
