@extends('template.template')
@section('content')
<div class="content search-result">
    <div class="over-lay">
        <div class="container">
            <h2>
                Search Result
            </h2>
            @foreach($products as $product)
                <p>{{ $product->ProductName }}</p>
            @endforeach
            <div class="row">
                <div class="col-lg-3">
                    <div class="item"></div>
                    <div class="item"></div>
                </div>
                <div class="col-lg-3">
                    <div class="item"></div>
                    <div class="item"></div>
                </div>
                <div class="col-lg-3">
                    <div class="item"></div>
                    <div class="item"></div>
                </div>
                <div class="col-lg-3">
                    <div class="item"></div>
                    <div class="item"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    console.log(currentcart);
</script>
@stop