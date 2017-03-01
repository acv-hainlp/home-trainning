@extends('layouts.master')

@section('title','Posts')

@section('content')

<div class="">
	<!-- Blog entry -->
	<div class="w3-card-4 w3-margin w3-white">
		<img src="https://www.w3schools.com/w3images/woods.jpg" alt="Nature" style="width:100%">
		<div class="w3-container w3-padding-8">
			<h3><a href="/posts/{{ $post->id }}">
				<b>{{ $post->title }}</b>
			</a></h3>
			<h5>Title description, <span class="w3-opacity">{{ $post->created_at }}</span></h5>
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
		<div class="w3-container">
			<ul>	
				@foreach ($post->comments as $comment)
					<li>
					<strong>{{ $comment->created_at->diffForHumans() }}</strong>
						"{{ $comment -> body }}"
					</li>
				@endforeach
			</ul>
		</div>

		<form class="w3-card-4 w3-container" method="post" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }}
			<textarea class="w3-input" name="body" placeholder="Your Comment is here" required=""></textarea>
			<input class="w3-btn w3-blue w3-margin" type="submit" value="Comment">
		</form>
		<div class="w3-card-4 w3-container w3-red">
			@foreach ($errors->all() as $error)
				{{ $error }}
			@endforeach
		</div>
</div>



@endsection