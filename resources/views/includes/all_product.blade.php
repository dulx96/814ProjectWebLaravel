<div class="content">
    <div class="over-lay">
        <div class="container">
            <div class="row">
                <div class="Filter form-group col-lg-3 col-md-3">
                    <h2>Filter By</h2>

                    <label>Manufacturer: </label>
                    <select class="form-control" id="manufactuer">
                        <option value="0" selected="true" disabled="disabled">--Select
                            Manufactuer--
                        </option>
                        @foreach($result["manufactuer"] as $manufactuer)
                        <option value="{{ $manufactuer->ProductManufacturer }}">
                            {{ $manufactuer->ProductManufacturer}}
                        </option>
                        @endforeach
                    </select>

                    <label>Category: </label>
                    <select class="form-control" id="category">
                        <option value="0" selected="true" disabled="disabled">--Select
                            Categories--
                        </option>
                        @foreach($result["categories"] as $categorie)
                        <option value="{{ $categorie->CategoryName}}">{{
                            $categorie->CategoryName}}
                        </option>
                        @endforeach
                    </select>

                    <label>Order By:</label>
                    <select class="form-control" id="order">
                        <option value="0" selected="true" disabled="disabled">--Order
                            By--
                        </option>
                        <option value="1">Từ thấp đến cao</option>
                        <option value="2">Từ cao đến thấp</option>
                    </select>
                </div>

                <div class="col-lg-9" id="show">
                    @include('includes.all_product_include')
                </div>
            </div>
        </div>
    </div>
</div>



