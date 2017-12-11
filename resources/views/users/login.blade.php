@extends('template.template')

@section('content')
<div class="container user-container">
	<form action="/login" method="POST" accept-charset="utf-8">
		{{ csrf_field() }}
		<h1 class="text-center">Log in</h1>
		<br>
		<p class="text-center">New user? <a href="/signup">Sign up now</a></p>
		<br>
		@include('flash::message')
		<div class="form-group">
			<input type="email" name="email" class="form-control"  onfocus="this.value=''" onblur="if (this.value=='') {this.value='Email';}" value="Email"/>
		</div>
		<div class="form-group">
			<input type="password" name="pass" class="form-control" onfocus="this.value=''" onblur="if (this.value=='') {this.value='Password';}" value="Password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" style="width: 100%">Log in</button>
		</div>

		<p class="text-center">Or log in with</p>
		<div class="facebook">
			<a href="#">
				<span class="fa fa-facebook"></span>
				<span class="connect-with">Connect with Facebook</span>
			</a>
		</div>
		<div class="google">
			<a href="#">
				<span class="fa fa-google"></span>
				<span class="connect-with">Connect with Google</span>
			</a>
		</div>

	</form>
</div>
@stop