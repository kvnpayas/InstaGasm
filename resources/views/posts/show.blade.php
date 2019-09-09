@extends('layouts.app')

@section('content')
<div class="container">
  	<div class="row">
	  	<div class="col-8">
		  <img src="/storage/{{ $post->image }}" alt="" class="w-100">
		</div>
		<div class="col-4">
			<div>
				<div class="d-flex align-items-center">
					<div class="pr-3">
						<img src="/storage/{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" alt="" style="max-width: 50px">
					</div>
					<div>
						<div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></div>
					</div>
					@can('view', $post->user->profile)
						<follow-button user-id="{{ $post->user->id }}" follows="{{ $follows }}"><follow-button>
					@endcan
				</div>
				<div class="pt-2">
					<p class="d-flex align-items-center">
						<span class="pr-2"><like-button post-id="{{ $post->id }}" likes="{{ (in_array($post->id, $likes)) }}"></like-button></span>
						<span class="font-weight-bold">{{ ($post->likes->count()) ? $post->likes->count() . " Likes" : "" }} </span>
					</p>
				</div>
				<hr>
				<p>
					<span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></span> {{ $post->caption }}
				</p>
			</div>
		</div>
  	</div>
</div>
@endsection
