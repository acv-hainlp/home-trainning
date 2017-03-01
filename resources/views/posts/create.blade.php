@extends('layouts.master')

@section('title','Create Post')

@section('content')


<form action="/posts" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin">
    {{ csrf_field() }}
	<h2 class="w3-center">New Post</h2>

	<div class="w3-row w3-section">
			<input class="w3-input w3-border" name="title" type="text" placeholder="Title" >
	</div>
	<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
		<div class="w3-rest">
			<textarea class="w3-input" name="body" placeholder="Content" ></textarea>
		</div>
	</div>

	<p class="w3-center">
		<button class="w3-btn w3-section w3-black w3-ripple"> Publish </button>
	</p>
</form>

@endsection