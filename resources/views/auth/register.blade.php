@extends('layouts.master')

@section('title')

    <title>Login</title>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-6 col-md-6 col-lg-6">

                <form action="" method="post" role="form">


                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control" >
                    </div>


                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control" >
                    </div>


                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" >

                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>

            </div>
        </div>
    </div>
@endsection