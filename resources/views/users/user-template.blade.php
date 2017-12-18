@extends('template.template')

@section('content')
<div class="container user-container">
	<div class="row">
		<div class="col-lg-2 user-menu">
			<img src="{{ $user->get_gravatar($user->getEmail()) }}" class="img-responsive user-ava">
			<h4 class="user-name">{{ $user->getName() }}</h4>
			<br>
			<ul class="list-unstyled user-menu-item">
				<a href=""><li>
					Quản lý tài khoản
				</li></a>
				<a href=""><li>
					Danh sách đơn hàng
				</li></a>
				<a href=""><li>
					Nhận xét của tôi
				</li></a>
				<a href="/logout"><li>
					Đăng xuất
				</li></a>
			</ul>
		</div>

		@yield('user-content')
	</div>
</div>
@stop