@extends('layouts.app')

@section('content')
<div class="container px-5">
  <div class="row">
    <div class="col-3 p-5">
    {{-- {{ dd($user->profile) }} --}}
      <img class="rounded-circle w-100" src="/storage/{{ $user->profile->profileImage() }}" alt="">
    </div>
    <div class="col-9">
      <div class="d-flex justify-content-between align-items-baseline">
        <div class="d-flex align-items-canter pb-3">
          <div class="h4">{{ $user->username }}</div>
          @can('view', $user->profile)
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"><follow-button>
          @endcan
        </div>

        @can('update', $user->profile)
          <a href="/p/create">Add New post</a>
        @endcan
      </div>
      @can ('update', $user->profile)
        <div class="pb-2">
          <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        </div>
      @endcan
      <div class="d-flex">
        <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
        <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> Followers</div>
        <div class="pr-5"><strong>{{ $user->following->count() }}</strong> Following</div>
        {{-- {{ dd($user) }} --}}
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
  </div> 

  <div class="row pt-4">
    @foreach($user->posts as $post)
    	<div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
          <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
