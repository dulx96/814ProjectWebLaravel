@extends('template.template')

@section('content')
<div class="container user-container">
	<form action="/users" method="POST" accept-charset="utf-8">
		{{ csrf_field() }}
		<div class="form-group ">
			<h1 class="text-center">Sign up</h1>
			<br>
			<p class="text-center">Already a user? <a href="/login">Login</a></p>
			<br>
			<input type="text" name="firstName" class="form-control user-form-name" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}">
			<input type="text" name="lastName" class="form-control user-form-name" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">
		</div>
		<div class="form-group">
			<input type="email" name="email" class="form-control" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
		</div>
		<div class="form-group">
			<input type="password" name="pass" class="form-control" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" style="width: 100%">Create a account</button>
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