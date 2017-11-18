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
            <div class="row">
            @foreach($bestseller as $product)
                    @include('includes.bestsell_thumbnail')
                @endforeach
            </div>
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
@stop