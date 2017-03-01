@extends('layouts.master')

@section('title','Posts')

@section('content')


@foreach ($posts as $post)
<!-- Blog entries -->
<div class="">
	<!-- Blog entry -->
	<div class="w3-card-4 w3-margin w3-white">
		<img src="https://www.w3schools.com/w3images/woods.jpg" alt="Nature" style="width:100%">
		<div class="w3-container w3-padding-8">
			<h3><a href="/posts/{{ $post->id }}">
				<b>{{ $post->title }}</b>
			</a></h3>
			<h5>{{ $post->user->name }} on, <span class="w3-opacity">{{ $post->created_at->toFormattedDateString() }}</span></h5>
		</div>

		<div class="w3-container">
			<p>{{ $post->body }}</p>
				<div class="w3-row">
					<div class="w3-col m8 s12">
						<p><button class="w3-btn w3-padding-large w3-white w3-border w3-hover-border-black"><b>READ MORE »</b></button></p>
					</div>
					<div class="w3-col m4 w3-hide-small">
						<p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
					</div>
				</div>
			</div>
		</div>
		<hr>
</div>

@endforeach

@endsection