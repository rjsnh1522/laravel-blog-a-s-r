@extends('layouts.master')

@section('title')
<title>My Blog | Edit Blog Post</title>

@endsection

@section('content')

    <div class="containerShowPost clearfix">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 skinny_wrapper floatLeft" id="post_show_content">
            <form action="{{route('post.dataUpdate',$post->id)}}" method="POST" role="form" data-parsley-validate="">
            	<h1>Update Post</h1>

            	<div class="form-group">
            		<label for="">Title</label>
            		<input type="text" value="{{$post->title}}" required="" maxlength="255" name="title" id="title" class="form-control" >
            	</div>

                <div class="form-group">
                    <label for="">Post Body</label>
                    {{--<input type="text" name="title" id="title" class="form-control" >--}}
                    <textarea name="body" value="" id="body" cols="30" rows="10" required="" class="form-control">{{$post->body}}</textarea>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="submit" class="btn btn-success btn-block btn-lg" value="Save Changes">
            </form>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 floatRight">

            <div class="well">
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
                    <a href="{{route('post.show',$post->id)}}" class="btn btn-default btn-block designBtn cancelRed">Cancel</a>
                        <a href="{{route('post.index')}}" class="btn btn-primary btn-block designBtn showAllGreen">Show All</a>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
