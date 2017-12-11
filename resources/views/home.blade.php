@extends('template.template')
@section('content')
    <!--best sell -->
    <!--introduce title-->
    <div class="introduce">
        <div class="over-lay">
            <h3>Awesome</h3>
            <h2 id="shadow-awesome">Awesome</h2>
            <div class="wrap"><h1>We are Birds. We can fly.</h1></div>
        </div>
    </div>

    {{--gradient-background--}}
    <!--news slide-->
    @include('includes.slide')
    <div id = "gradient"></div>
    <div id="fullpage">
        <div class="section fake"></div>
        <div class="section best-sell">
            <div class="over-lay">
                <div class="container">
                    <div class="catalog">
                        <h1>BEST</h1>
                        <h2>SELLING</h2>
                    </div>
                    @foreach($bestseller as $product)
                        @include('includes.home_products_thumbnail')
                    @endforeach
                </div>
            </div>
        </div>
        <!--new-->
        <div class="section new">
            <div class="over-lay">
                <div class="container">
                    <div class="catalog">
                        <h1>MOST</h1>
                        <h2>NEW</h2>
                    </div>
                    @foreach($new as $product)
                        @include('includes.home_products_thumbnail')
                    @endforeach
                </div>
            </div>

        </div>

        <div class="section hot">
            <div class="over-lay">
                <div class="container">
                    <div class="catalog">
                        <h1>HOT</h1>
                        <h2>SAIKIN</h2>
                    </div>
                    @foreach($hot as $product)
                        @include('includes.home_products_thumbnail')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--modal--}}
    <div class="modal fade" id="item_modal" tabindex="-1" role="dialog" aria-labelledby="item_modal_label">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="item_modal_body">

                </div>
            </div>
        </div>
    </div>


    {{--product details--}}
    @include('includes.product_detail')
@stop