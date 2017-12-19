@extends('template.AdminTemplate')
@section('content')
<div class="admin-table">
    <div class="input-group" id="admin-div-search">
        <input type="text" id="admin-search" name="key"
               placeholder="Search for user"/>
    </div>
    <div class="table-content">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>UserID</th>
                <th>Price ($)</th>
                <th>Ship Address</th>
                <th>Order City</th>
                <th>Order Country</th>
                <th>Order Phone</th>
                <th>Ship's Price ($)</th>
                <th>Tax ($)</th>
                <th>Email</th>
                <th>Date</th>
                <th>Shipped ?</th>
                <th colspan="2" style="text-align: center">Option</th>
            </tr>
            </thead>
            <tbody id="table-body">
                @include("includes.table_orders")
            </tbody>
        </table>
    </div>
</div>

@stop

