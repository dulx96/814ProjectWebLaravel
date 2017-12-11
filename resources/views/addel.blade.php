@extends("template.template")
@section('content')
<div class="addel-form">
    <form class="form-horizontal" action="/admin?ProductID={{ $product ->
    ProductID}}">
        <input hidden type="number" name="ProductID" value="{{ $product ->
        ProductID}}">
        <div class="form-group">
            <label class="control-label col-sm-2" for="productsku">ProductSKU:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="productsku"
                       placeholder="Enter ProductSKU" value="{{ $product -> ProductSKU }}"
                       name="ProductSKU">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ProductName">ProductName:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="productname"
                       placeholder="Enter ProductName"
                       value="{{ $product -> ProductName }}"
                       name="ProductName">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"
                   for="ProductManufactuer">ProductManufacturer:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="productmanufactuer"
                       placeholder="Enter ProductManufactuer"
                       value="{{ $product -> ProductManufacturer }}"
                       name="ProductManufacturer">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ProductPrice">ProductPrice:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="productprice"
                       placeholder="Enter ProductPrice"
                       value="{{ $product -> ProductPrice }}"
                       name="ProductPrice">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"
                   for="ProductWeight">ProductWeight:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="productweight"
                       value="{{ $product -> ProductWeight}}"
                       placeholder="Enter ProductWeight" name="ProductWeight">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ProductQuantity">Product
                Quantity:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="productquantity"
                       placeholder="Enter ProductQuantiry"
                       value="{{ $product -> ProductQuantity }}"
                       name="ProductQuantity">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ProductQuantity">Product
                Description:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="productdescription"
                       placeholder="Enter ProductDescription"
                       value="{{ $product -> ProductDescription }}"
                       name="ProductDescription">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">ProductCategoryID</label>
            <div class="col-sm-10">
                @foreach($categories as $category)
                <label class=" radio-inline"><input type="radio"
                                                    value="{{ $category -> CategoryID }}"
                                                    name="ProductCategoryID">{{
                    $category->CategoryName }}
                </label>
                @endforeach
            </div>
        </div>

        <button type="submit" style="float: right" id="btn-s" class="btn btn-primary">Ok
        </button>
    </form>
</div>
@endsection