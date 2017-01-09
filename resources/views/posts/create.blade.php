@extends('layouts.master')

{{--@section('title','| Create New Post')--}}

@section('content')

    {{--<div class="container">--}}


        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul style="list-style: none">--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        <div class="row skinny_wrapper" id="post_show_content">
            <div class="col-xs-6 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-lg-6">
                <h1>Create New Post</h1>
                <hr>
                <form action="{{route('post.store')}}" method="post" role="form" data-parsley-validate="">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" required="" maxlength="255">
                        <span class="error">{{ $errors->first('title') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="body">Post Body</label>
                        {{--<input type="text"  name="" id="" placeholder="Input...">--}}

                        <textarea name="body" id="body" class="form-control" cols="30" rows="10" required=""></textarea>
                        <span class="error">{{ $errors->first('body') }}</span>
                    </div>

                    {{--<input type="hidden" name="_token" value="{ csrf_token }">--}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Create post">
                </form>
            </div>
        </div>

    {{--</div>--}}

@endsection
