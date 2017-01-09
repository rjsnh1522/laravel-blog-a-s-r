@extends('layouts.master')



@section('css')
@endsection


@section('content')



    <div class="row skinny_wrapper" id="post_show_content">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Contact me</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-offset-3 col-sm-6 col-md-6 col-lg-6">
        	<form action="#" method="post" role="form">

        		<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="">Name</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                    {{--<input type="text"  name="name" id="name">--}}
                </div>



        		<input type="submit" class="btn btn-success" value="Send Message">
        	</form>
        </div>
        </div>
    </div> {{--end container--}}



@endsection



@section('script')
@endsection