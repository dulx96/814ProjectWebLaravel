@extends('users.user-template')

@section('user-content')
<div class="col-lg-8">
	<div class="user-card">
		<div class="user-card-content">
			<h2>Thông tin cá nhân</h2>
			<p>Họ Tên : {{ $user->getName() }}</p>
			<p>Email : {{ $user->getEmail() }}</p>
			<p>Quốc Gia : {{ $user->getCountry() }}</p>
		</div>
		<div class="user-card-edit">
			<a href="">CHỈNH SỬA</a>
		</div>
	</div>
	<div class="user-card">
		<div class="user-card-content">
			<h2>Đơn đặt hàng gần đây</h2>

		</div>
		<div class="user-card-edit">
			<a href="">CHỈNH SỬA</a>
		</div>
	</div>

</div>
@stop