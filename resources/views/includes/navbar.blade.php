<header id="main_navigation" class="clearfix">
    <a href="{{route('get.index')}}" class="name">Logan</a>
    <nav>
        <a href="{{route('post.index')}}">Posts</a>
        <a href="{{route('post.index')}}">About</a>
        <a href="{{route('get.contact')}}">Contact</a>
        @if(Session::has('email')) <a href="{{route('post.create')}}">Add Post</a>@endif
       @if(Session::has('email')) <a href="{{route('logout.me')}}">Logout</a>@endif
    </nav>
</header>