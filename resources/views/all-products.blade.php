@extends('template.template')
@section('content')
<div class="content best-sell">
    <div class="over-lay">
        <div class="container">
            <h2>
                Best Selling
                1      </h2>
            <div class="row">
                @foreach($bestseller as $product)
                    @include('includes.bestsell_thumbnail')
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    console.log(sessionStorage.getItem('cart'));
</script>
@stop