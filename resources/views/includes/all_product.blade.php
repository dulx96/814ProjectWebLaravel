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
                    <div class='item'>
                        <div class='item-over-lay ' data-ProductID={{$product->ProductID}}>
                            <div class='product_image'
                                 style="background-image: url('img/products/{{$product->image}}')"></div>
                            <div class="over-lay"></div>
                            <div class='info_container'>
                                <p class='product_name' data-ProductID={{$product->
                                    ProductID}}>{{$product->ProductName}}</p>
                                <p class='product_manufacturer'>Hãng: {{$product->ProductManufacturer}}</p>
                                <p class='product_description'>Chi tiết: {{$product->ProductDescription}}</p>
                                <p class='product_price'>{{$product->ProductPrice}}</p>
                            </div>

                            <div class="btn-options">
                                <p>{{$product->ProductPrice}}</p>

                                <i data-ProductID='{{$product->ProductID}}'
                                   data-ProductName='{{$product->ProductName}}'
                                   data-ProductPrice='{{$product->ProductPrice}}'
                                   data-ProductImage='{{$product->image}}'
                                   data-Quantity='1'
                                   class='fa fa-cart-plus add_to_card'></i>

                                <i data-ProductID={{$product->ProductID}}
                                    data-ProductName={{$product->ProductName}}
                                    data-ProductPrice={{$product->ProductPrice}}
                                    data-Quantity='1'
                                    class='fa fa-opencart quick_buy_button'></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



