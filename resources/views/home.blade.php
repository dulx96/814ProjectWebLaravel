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
            </h2>
                $product = array();
            @for($i=0;$i<12;$i++)
                $product = $bestseller[$i];
                @include('includes.bestsell_thumbnail')
            @endfor
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