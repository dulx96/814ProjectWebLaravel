<div class='col-lg-3 col-md-4 col-sm-6'>
    <div class='item'>
      <div class='image_container'>
        <img class='product_image' src="img/logo.png">
        <div class='overlay_image' data-ProductID= {{$product->ProductID}}></div>
      </div>
      <div class='info_container'>
        <h3 class='product_name' data-ProductID={{$product->ProductID}}>
            {{$product->ProductName}}
        </h3>
        <div class='product_price'>
            {{$product->ProductPrice}}
        </div>
      </div>
      <div class='quick_buy_container'>
        <button data-ProductID={{$product->ProductID}}
                data-ProductName={{$product->ProductName}}
                data-ProductPrice={{$product->ProductPrice}}
                data-Quantity='1'
                class='quick_buy_button'>
          MUA NGAY
        </button>
      </div>
    </div>
</div>
