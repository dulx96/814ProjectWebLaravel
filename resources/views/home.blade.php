@extends('template.template')
@section('content')


<!--best sell -->
<!--introduce title-->
<div class="introduce">
    <div class="over-lay">
        <h3>Awesome</h3>
        <h2 id="shadow-awesome">Awesome</h2>
        <div class="wrap"><h1>We are Birds. We can fly.</h1> </div>

    </div>
</div>
<!--news slide-->
@include('includes.slide')
<div class="content best-sell">
    <div class="over-lay">
        <div class="banner" style= "background-image: url('../img/banner/bestsell.jpg')"></div>
        <div class="container">
            @foreach($bestseller as $product)
                    @include('includes.bestsell_thumbnail')
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
<script>
    var currentcart = [];
    var item;
    $(".add_to_card").click(function (e) {
        e.stopPropagation();
        currentcart = JSON.parse(sessionStorage.getItem('cart'));
        if(currentcart === null) currentcart = [];
        item = {
            "id":this.getAttribute('data-ProductID'),
            "name":this.getAttribute('data-ProductName'),
            "price":this.getAttribute('data-ProductPrice'),
            "image":this.getAttribute('data-ProductImage'),
            "quantity":this.getAttribute('data-Quantity')
        };
        currentcart.push(item);
        sessionStorage.setItem('cart',JSON.stringify(currentcart));
        console.log(currentcart);
        showcart();
    });

</script>
@stop