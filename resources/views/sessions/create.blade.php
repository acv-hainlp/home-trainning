@extends('layouts.master')

@section('title', 'registation')

@section('content')

<form class="w3-container w3-card-4" method="post" action="/register">
	{{ csrf_field() }}

		<input class="w3-input" type="text" name="name" required>
		<label class="w3-label w3-validate">Name</label></p>

		<input class="w3-input" type="text" name="email" required>
		<label class="w3-label w3-validate">Email</label></p>

		<input class="w3-input" type="password" name="password" required>
		<label class="w3-label w3-validate">Password</label>

		<input class="w3-input" type="password" name="password_confirmation" required>
		<label class="w3-label w3-validate">Password Confirmation</label>

		<button class="w3-btn-block w3-section w3-teal w3-ripple"> Register </button>

</form>

@endsection