@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" class="rounded-circle p-5" style="width: 200px">
        </div>
        <div class="col-9">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>153</strong> followers</div>
                <div class="pr-5"><strong>153</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.ftlv6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.110.928.928a/s640x640/96659418_262291735135612_3457119677470427431_n.jpg?_nc_ht=instagram.ftlv6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=OxOwZ5zoKQIAX8bfk3L&oh=eb16c4d2cfc1264041200b75e259922c&oe=5EDEC7F2" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.ftlv6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.110.928.928a/s640x640/96659418_262291735135612_3457119677470427431_n.jpg?_nc_ht=instagram.ftlv6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=OxOwZ5zoKQIAX8bfk3L&oh=eb16c4d2cfc1264041200b75e259922c&oe=5EDEC7F2" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.ftlv6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.110.928.928a/s640x640/96659418_262291735135612_3457119677470427431_n.jpg?_nc_ht=instagram.ftlv6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=OxOwZ5zoKQIAX8bfk3L&oh=eb16c4d2cfc1264041200b75e259922c&oe=5EDEC7F2" class="w-100">
        </div>
    </div>
</div>
@endsection
