@extends('layouts.master')

@section('title')
<title>My Blog | All Post</title>
@endsection

@section('css')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.css">--}}

@endsection
@section('content')

    <div class="row skinny_wrapper" id="post_show_content">
    	<div class="row">
    		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    			<h1 class="allPost">All Posts</h1>
    		</div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 clearfix">
                <a href="{{route('post.create')}}" class="btn btn-lg btn-block btn-primary floatRightIndex designBtn showAllGreen">Create New Post</a>
            </div>
            <hr>
    	</div>

    	<div class="row">
    		<table class="table table-hover">
    			<thead>
    				<tr>
    					<th>#</th>
                        <th>title</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
                <?php $i=0;?>
                @foreach($posts as $post)
                   <?php $i++; ?>

    				<tr>

    					<td>{{$i}}</td>
                        <td>{{substr($post->title,0,15)}}{{strlen($post->title)>25 ? "...":""}}</td>
                        <td>{{substr($post->body,0,50)}}{{strlen($post->body)>50 ? "...":""}}</td>
                        <td>{{date('F j,Y h:i a',strtotime($post->created_at))}}</td>

                        <td>
                            <a href="{{route('post.show',$post->id)}}" class="btn btn-default btn-xs">view</a>
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-xs">edit</a>

                        </td>

                    </tr>
                    @endforeach
    			</tbody>

    		</table>

            <div class="text-center">
                {{--{{$posts->links()}}--}}

                <ul class="pagination">
                    {{$posts->links()}}

                    {{--<li><a href="#">«</a></li>--}}
                    {{--<li><a href="#">1</a></li>--}}
                    {{--<li><a class="active" href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">5</a></li>--}}
                    {{--<li><a href="#">6</a></li>--}}
                    {{--<li><a href="#">7</a></li>--}}
                    {{--<li><a href="#">»</a></li>--}}
                </ul>
            </div>
    	</div>
    </div>




@endsection

@section('script')

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.js"></script>--}}
    <script src="http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>
    <script>$('table').DataTable();</script>
    @endsection