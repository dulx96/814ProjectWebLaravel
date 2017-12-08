@extends('template.template')

@section('content')
	<ul>
		<li>{{ $user->UserEmail }}</li>
		<li>{{ $user->UserFirstName }}</li>
	</ul>
@stop