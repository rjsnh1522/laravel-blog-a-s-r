@extends('layouts.master')

@section('title')
    <title>My Blog | {{$post->title}}</title>
@endsection

@section('content')

    <div class="containerShowPost clearfix">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 skinny_wrapper floatLeft" id="post_show_content">
            {{--<p>{{date('F j, Y',strtotime($post->created_at))}}</p>--}}
            <h1 class="text-center">{{$post->title}}</h1>

            <p>{{$post->body}}</p>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 floatRight">

            <div class="well">

                <dl class="dl-horizontal">
                    <dt>Url:</dt>
                    <dd><a href="{{route('blog.single',$post->slug)}}">{{route('blog.single',$post->slug)}}</a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{date('F j, Y h:i a',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated</dt>
                    <dd>{{date('F j, Y h:i a',strtotime( $post->updated_at))}}</dd>
                </dl>

                <div class="row margin20">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <form action="{{route('post.dataDelete',$post->id)}}" method="post">
                        {{--<a href="" class="btn btn-danger btn-block">Delete</a>--}}
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-block designBtn showAllGreen">Edit</a>

                            <input type="submit" value="Delete" class="btn btn-block btn-danger cancelRed">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
