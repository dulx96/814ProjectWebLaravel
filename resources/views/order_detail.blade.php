@extends('template.AdminTemplate')
@section('content')
<div class="admin-table">
    <div class="table-content">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ProductID</th>
                <th>SKU</th>
                <th>ProductName</th>
                <th>Description</th>
                <th>Manufacturer</th>
                <th>Price</th>
                <th>Weight</th>
                <th>CateID</th>
                <th>OrderQuantity</th>
            </tr>
            </thead>
            <tbody id="table-body">
            @include('includes.order_detail_table')
            </tbody>
        </table>
        <div style="float: right">
            <p style="font-size: 20px; font-weight: bold">Sum: {{ $sum }} </p>
        </div>
    </div>
</div>
@stop

