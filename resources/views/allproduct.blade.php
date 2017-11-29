@php
$products = $result["products"];
$categories = $result["categories"];
@endphp
@extends('template.template')
@section('content')

<script>
    $(document).ready(function () {
        $('#order').change(function () {
            var value = jQuery('#order').val();
            alert(value);
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: '/allproduct/order',
                data: {
                    value: value
                },
                success: function (response) {
                    $("#all-products-content").html(response)
                },
                error: function (xhr, testStatus, thrownError) {
                    alert("Error");
                }
            });
        })
    });
</script>

<div id="all-products-content">
    <div class="content">
        <div class="over-lay">
            <div class="container">
                <div class="row">
                    <div class="Filter form-inline form-group col-lg-3 col-md-3">
                        <label>Manufacturer:</label>
                        <select class="form-control" id="manufactuer">
                            @foreach($products as $product)
                            <option value="{{ $product->ProductManufacturer }}">
                                {{ $product-> ProductManufacturer}}
                            </option>
                            @endforeach
                        </select>
                        <label>Category:</label>
                        <select class="form-control" id="category">
                            @foreach($categories as $categorie)
                            <option value="{{ $categorie->CategoryName}}">{{ $categorie->CategoryName}}</option>
                            @endforeach
                        </select>
                        <label>Order By:</label>
                        <select class="form-control" id="order">
                            <option value="1">Từ thấp đến cao</option>
                            <option value="2">Từ cao đến thấp</option>
                        </select>
                    </div>

                    <div class="col-lg-9">
                        @foreach($products as $product)
                        @include('includes.all_product')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

