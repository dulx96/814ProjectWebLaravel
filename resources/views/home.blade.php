@extends('template.template')
@section('content')


<!--best sell -->
<!--introduce title-->
@include('includes.introduce')
<!--news slide-->
@include('includes.slide')
<div class="content best-sell">
    <div class="over-lay">
        <div class="container">
            <h2>
                Best Selling
      1      </h2>
            @foreach($bestseller as $product)
                <div class='col-lg-3 col-md-4 col-sm-6'>
                    <div class='item'>
                        <div class='image_container'>
                            <img class='product_image'>
                            <div class='overlay_image' data-ProductID= {!! $product->ProductID !!} ></div>
                        </div>
                        <div class='info_container'>
                            <h3 class='product_name' data-ProductID={{ $product->ProductID }}>
                                {{ $product->ProductName }}
                            </h3>
                            <div class='product_price'>
                                {{$product->ProductPrice}}
                            </div>
                        </div>
                        <div class='quick_buy_container'>
                            <button data-ProductID={{$product->ProductID}}
                                    data-ProductName={{$product->ProductName}}
                                    data-ProductPrice={{$product->ProductPrice}}
                                    data-Quantity='1'
                                    class='quick_buy_button'>
                                MUA NGAY
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--new-->
<div class="content new">
    <div class="over-lay">
        <div class="container">
            <h2>
                New
            </h2>
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
</div><div class="content noi-bat">
    <div class="over-lay">
        <div class="container">
            <h2>
                Noi Bat
            </h2>
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
@stop