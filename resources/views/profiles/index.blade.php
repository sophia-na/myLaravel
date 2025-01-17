@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2 p-5">
            <img src="{{$user->profile->profileImage()}}"  class="rounded-circle w-100">
        </div>
         <div class="col-9 pt-5" >
        <div class="d-flex justify-content-between align-items-baseline">

       <div class="d-flex align-item-center pb-4">
       <div class="h4">{{ $user->username}}</div>
        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
        </div>

        @can('update', $user->profile)
        <a href="/p/create">Add new post</a>
        @endcan
        </div>
         @can('update', $user->profile)
         <a href="/profile/{{$user->id}}/edit">Edit profile</a>
        @endcan

        <div class="d-flex">
        <div class="pr-4"><strong>{{$user->posts->count()}}</strong> Posts</div>
        <div class="pr-4"><strong>{{$followersCount}}</strong>Follower</div>
        <div class="pr-4"><strong>{{ $followingCount}}</strong>Follwoing</div>
        </div>

         <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
         <div> {{$user->profile->description}}</div>
             <div><a href="www.facegram.com">{{$user->profile->url}}</a></div>
         </div>
    </div>
     <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
