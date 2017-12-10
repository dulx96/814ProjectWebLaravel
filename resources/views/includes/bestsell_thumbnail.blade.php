<div class='item'>
    <div class='item-over-lay ' data-ProductID={{$product->ProductID}}>
        <div class='product_image' style="background-image: url('/img/products/{{$product->image}}')"></div>
        <div class="over-lay"></div>
        <div class='info_container'>
                <p class='product_name' data-ProductID={{$product->ProductID}}>{{$product->ProductName}}</p>
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

