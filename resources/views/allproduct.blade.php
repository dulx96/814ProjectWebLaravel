@extends('template.template')
@section('content')

<div id="all-products-content">
    @include('includes.all_product')
</div>

{{--modal--}}

{{--product details--}}
@include('includes.product_detail')

@stop

