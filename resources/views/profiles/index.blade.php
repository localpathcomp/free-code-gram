@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_ohc=FsFGyFNBXkAAX_yvUy3&oh=1ea7b06ceea9cac8a0c67eff1ee2e573&oe=5ED5D8C6" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">

    @foreach($user->posts as $post)

        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

    @endforeach

    </div>
</div>
@endsection
