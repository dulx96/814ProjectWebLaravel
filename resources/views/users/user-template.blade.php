@extends('template.template')

@section('content')
<div class="container user-container">
	<div class="row">
		<div class="col-lg-2 user-menu">
			<img src="{{ $user->get_gravatar($user->getEmail()) }}" class="img-responsive user-ava">
			<h4 class="user-name">{{ $user->getName() }}</h4>
			<br>
			<ul class="list-unstyled">
				<li class="user-menu-item">
					<a href="">Quản lý tài khoản</a>
				</li>
				<li class="user-menu-item">
					<a href="">Danh sách đơn hàng</a>
				</li>
				<li class="user-menu-item">
					<a href="">Nhận xét của tôi</a>
				</li>
			</ul>
		</div>

		@yield('user-content')
	</div>
</div>
@stop