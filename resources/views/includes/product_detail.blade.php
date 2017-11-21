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
            <button id=@{{ProductID}}
                    data-ProductID=@{{ProductID}}
                    data-ProductName=@{{ProductName}}
                    data-ProductPrice=@{{ProductPrice}}
                    data-Quantity='1'
                    class='quick_buy_button'>
              MUA NGAY
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

<script type="text/javascript">
    $(document).ready(function(){
        var itemModalTemplate = Handlebars.compile($("#item-modal-template").html());
        $('body').on('click', '.overlay_image, .product_name', function(){
            var productId = $(this).attr('data-ProductID');
            var loadedData = <?php echo json_encode($loadedData); ?>;
            var loadedImage = <?php echo json_encode($loadedImage); ?>;
            var obj = $.parseJSON(loadedData[productId]);
//            if($.parseJSON(loadedImage[productId]) != null)
//                obj.image = $.parseJSON(loadedImage[productId]).image;

            $("#item_modal_body").html(itemModalTemplate(obj));
            $("#item_modal").modal("show");



            $.ajax({
                dataType: 'json',
                type:'GET',
                url: 'comment/get',
                data: {
                    productId: productId
                }
            }).done(function (response) {
                $("#test").html(response)
            });

            $(".input_qty").on('keyup keydown change', function(events) {
                $('#' + productId).attr("data-Quantity", $(this).val());
            });
        });
    });
</script>
