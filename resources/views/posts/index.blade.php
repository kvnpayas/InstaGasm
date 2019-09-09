
@extends('layouts.app')

@section('content')
<div class="container">
	{{-- {{ dd($like) }} --}}
  	@foreach($posts as $post)
  	{{-- {{ print_r($post->id) }} --}}
	  	<div class="row pb-4">
	  		<div class="col-6 offset-3">
	  		<div class="card">
	  			<div class="card-header">
					<div class="d-flex align-items-center">
						<div class="pr-3">
							<img src="/storage/{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" alt="" style="max-width: 40px">
						</div>
						<div>
							<div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></div>
						</div>
					</div>
				</div>
			  	<div class="card-img-top">
				  <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt="" class="w-100"></a>
				</div>
			
			
				<div class="card-body">
					<div class="card-text">
						{{-- {{ $check = (in_array($post->id, $likes)) }} --}}
						<p class="d-flex align-items-center">
							<span class="pr-2"><like-button post-id="{{ $post->id }}" likes="{{ (in_array($post->id, $likes)) }}"></like-button></span>
							<span class="font-weight-bold">{{ ($post->likes->count()) ? $post->likes->count() . " Likes" : "" }} </span>
						</p>
						<p>
							<span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></span> {{ $post->caption }}
						</p>
						<span>{{ $post->timeConvert($post->created_at) }}</span>
					</div>
				</div>
			</div>
		</div>
	  	</div>
  	@endforeach
</div>
@endsection
