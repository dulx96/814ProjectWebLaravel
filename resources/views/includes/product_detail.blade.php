<!-- modal detail product template -->
<script id="item-modal-template" type="text/x-handlebars-template">
    <div class="prod_modal">
        <div class="big-logo">
            <a href="index.php">
                <h3>
                    Sản phẩm uy tín từ
                    <img src="img/logo.png">
                    <span id="name">5 Birds</span>
                    <span>Shop</span>
                    <sup>tm</sup>
                </h3>
            </a>
        </div>

        <div class="product_modal">

            <div class="product_container">
                <div class="image_container">
                    <img src="img/products/@{{image}}">
                </div>
                <div class="product_info">
                    <div>
                        <h1>@{{ProductName}}</h1>
                        <table>
                            <tr class="prod_brand">
                                <th>Sản xuất bởi</th>
                                <td>@{{ProductManufacturer}}</td>
                            </tr>
                            <tr class="prod_inventory">
                                <th>Trong kho còn</th>
                                <td>@{{ProductQuantity}} sản phẩm</td>
                            </tr>
                            <tr class="prod_quantity">
                                <th>Số lượng</th>
                                <td><input class="input_qty"
                                           name="qty"
                                           autofocus="autofocus"
                                           autocomplete="off"
                                           min="1"
                                           max="9999"
                                           value="1"
                                           type="number"></input>
                                </td>
                            </tr>
                            <tr class="prod_price">
                                <th>Giá</th>
                                <td>@{{ProductPrice}} $</td>
                            </tr>
                        </table>
          </div>
          <div class='quick_buy_container'>
            <a id=@{{ProductID}}
                    data-ProductID=@{{ProductID}}
                    data-ProductName=@{{ProductName}}
                    data-ProductPrice=@{{ProductPrice}}
                    data-ProductImage='@{{image}}'
                    data-Quantity='1'
                    class='quick_buy_button_details' href="/cart">
              MUA NGAY
            </a>
            <button data-ProductID='@{{ProductID}}'
                    data-ProductName='@{{ProductName}}'
                    data-ProductPrice='@{{ProductPrice}}'
                    data-ProductImage='@{{image}}'
                    data-Quantity='1'
                    class='add_to_card_details'>
              THÊM VÀO GIỎ
            </button>
                    </div>
                </div>
            </div>

            <div class="prod_des">
                <h3>Giới thiệu sản phẩm</h3>
                <p>@{{ProductDescription}}</p>
            </div>
            <div id="test"></div>
        </div>
    </div>
</script>

