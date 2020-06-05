@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{$user->profile->profileImage()}}" class="rounded-circle p-5 w-100"
                     style="width: 200px">
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    @can('update',$user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                @can('update',$user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts()->count()  }}</strong> posts</div>
                    <div class="pr-5"><strong>153</strong> followers</div>
                    <div class="pr-5"><strong>153</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
