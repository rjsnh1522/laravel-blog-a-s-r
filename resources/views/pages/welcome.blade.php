@extends('layouts.master')

@section('css')
@endsection

@section('title')
    <title>My Blog | Home</title>
    @endsection


@section('content')

    <div class="wrapper wrapper_padding clearfix">
    <div class="col-1 about homepage_content">
        <h2>About</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, architecto enim natus neque tempora voluptates voluptatibus voluptatum! Accusamus, assumenda consectetur cum cupiditate distinctio dolores eos, labore porro quasi rerum ut!
            Lorem </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, architecto enim natus neque tempora voluptates voluptatibus voluptatum! Accusamus, assumenda consectetur cum cupiditate distinctio dolores eos, labore porro quasi rerum ut!
            Lorem <a href="#">Read More</a></p>
    </div>

    <div class="col-2 homepage_content">
        <h2>Stuff I've Written</h2>
        <hr>
        @foreach($posts as $post)
        <h3><a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a></h3>
        <p class="date">{{$post->created_at}}</p>

        @endforeach

    </div>

    <div class="col-3 homepage_content">
        <h2>Stuff I've Build</h2>
        <hr>
        <h3><a href="#">Unicast</a></h3>
        <p class="date">Friday April 10</p>

        <h3><a href="#">The Community</a></h3>
        <p class="date">Friday April 10</p>

        <h3><a href="#">The Community</a></h3>
        <p class="date">Friday April 10</p>
    </div>

</div>



@endsection



@section('script')
@endsection