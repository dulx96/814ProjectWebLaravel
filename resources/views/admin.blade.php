@extends('template.template')
@section('content')
<div class="admin-table">
    <div>
        <a href="/admin/addel" class="btn btn-primary" id="add-more">Add More Product</a>
    </div>
    <div class="input-group" id="admin-div-search">
        <input type="text" id="admin-search" name="key"
               placeholder="Search for products"/>
    </div>
    <div class="table-content">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>ProductName</th>
                <th>Description</th>
                <th>Manufacturer</th>
                <th>Price</th>
                <th>Weight</th>
                <th>CategoryID</th>
                <th>ProductUpdateDate</th>
                <th>Quantity</th>
                <th colspan="2" style="text-align: center">Option</th>
            </tr>
            </thead>
            <tbody id="table-body">
            @include('includes.table')
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        var i = 20;
        $('body').on("click", ".button-delete", function () {
            var val = confirm("Are you sure?");
            var id = $(this).val();
            var a = "#"+id;
            if (val == true) {
                $.ajax({
                    data: {
                        id: id
                    },
                    url: "/admin/delete",
                    success: function () {
                        $(a).hide();
                    },
                    error: function (xhr, testStatus, thrownError) {
                        alert("Error");
                    }
                });
            }
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() > $(document).height() - 2) {
                $.ajax({
                    data: {
                        i: i
                    },
                    url: "/admin/loadmore",
                    success: function (result) {
                        i = i + 20;
                        document.getElementById("table-body").innerHTML += result;
                    },
                    error: function (xhr, testStatus, thrownError) {
                        alert("Error");
                    }
                });
            }
        });

        $('#admin-search').autocomplete({
            source: "/search/autocomplete",
            minLength: 1
        });

        $('#admin-search').keyup(function () {
            var input = $('#admin-search').val();
            $.ajax({
                data: {
                    input: input
                },
                url: "/admin/adminFilter",
                success: function (result) {
                    document.getElementById("table-body").innerHTML = result;
                },
                error: function (xhr, testStatus, thrownError) {
                    alert("Error");
                }
            });
        });
    });
</script>
@stop

