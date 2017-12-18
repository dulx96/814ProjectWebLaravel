@extends('template.template')

@section('content')
<div class="container user-container">	
	<form action="/addpass" method="post" accept-charset="utf-8">
		{{ csrf_field() }}
		<h1 class="text-center">Enter password for {{ $email }}</h1>
		<br>
		<div class="form-group">
			<input type="password" name="pass" class="form-control" onfocus="this.value=''" onblur="if (this.value=='') {this.value='Password';}" value="Password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" style="width: 100%">Log in</button>
		</div>
	</form>
</div>
@stop