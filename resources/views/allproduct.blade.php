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
    @include('includes.all_product')
</div>

</div>
@endsection

