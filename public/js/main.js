$("#Glide").glide({
    type: 'carousel',
    paddings: '20%',
    startAt: 1,
    touchDistance: 2

});
// show comments
function show_comments(productId) {
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

}


$(document).ready(function () {
    $('#order, #manufactuer, #category').change(function () {
        var order = document.getElementById('order').value;
        var manufactuer = document.getElementById('manufactuer').value;
        var category = document.getElementById('category').value;
        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: '/allproduct/filter',
            data: {
                order: order,
                manufactuer: manufactuer,
                category: category
            },
            success: function (response) {
                $("#show").html(response)
            },
            error: function (xhr, testStatus, thrownError) {
                alert("Error");
            }
        });
    });
});

// show details
function show_details(obj) {
    var itemModalTemplate = Handlebars.compile($("#item-modal-template").html());
    $("#item_modal_body").html(itemModalTemplate(obj));
    $("#item_modal").modal("show");
    show_comments(obj['ProductID']);
    $(".input_qty").on('keyup keydown change', function(events) {
        $('#' + obj['ProductID']).attr("data-Quantity", $(this).val());
    });

    var currentcart = [];
    var item;
    $(".add_to_card_details").click(function (e) {
        currentcart = JSON.parse(sessionStorage.getItem('cart'));
        if(currentcart === null) currentcart = [];
        item = {
            "id":this.getAttribute('data-ProductID'),
            "name":this.getAttribute('data-ProductName'),
            "price":this.getAttribute('data-ProductPrice'),
            "image":this.getAttribute('data-ProductImage'),
            "quantity": $('.input_qty').val()
        };
        currentcart.push(item);
        sessionStorage.setItem('cart',JSON.stringify(currentcart));
        console.log(currentcart);
        showcart();
    });
}

// search_ajax + animate
$('#search_text').autocomplete({
    source: "/search/autocomplete",
    minLength:1,
    select: function(event, ui) {
        $('#search_text').val(ui.item.value);
        var data = ui["item"]["Product"];
        show_details(data);
    }
});

$("#adv-search").hide();
$("#btn-search").click(function (event) {
    $(this).toggleClass("active");
    $("#adv-search").toggle("slide", {direction: "right" },250);
});



// art to cart
function showcart() {
    currentcart = JSON.parse(sessionStorage.getItem('cart'));
    var cart = $(".cart");
    cart.html("");
    if(currentcart !== null){
        $.each(currentcart,function (index,value) {
            cart.append(
                "<div class='card'" +"data-stt='"+index+"'>"+
                "<div class='name'>"+value['name'] +"</div> "+
                "<div class='delete'>xoa"+"</div>" +
                "</div>"
            );

        });
        $(".card .delete").click(function () {
            currentcart.splice($(this).parent().attr('stt'),1);
            $(this).parent().remove();
            sessionStorage.setItem('cart',JSON.stringify(currentcart));
            if(currentcart.length<1){
                cart.append("<p>nothing</p>");
            }
        });



    }
    else cart.append("<p>nothing</p>");

}
$(".cart").hide();
showcart();
$(".order-box .fa").click(function (event) {
    $(".cart").toggle("slide", {direction: "down" }, 200);
});


// introduce effect

// Quotes about learning from goodreads -- http://www.goodreads.com/quotes/tag/learning
