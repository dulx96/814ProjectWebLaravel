$("#Glide").glide({
    type: 'carousel',
    paddings: '20%',
    startAt: 1,
    touchDistance: 2

});


// search_ajax
$('#search_text').autocomplete({
    source: "/search/autocomplete",
    minLength:1,
    select: function(event, ui) {
        $('#search_text').val(ui.item.value);
    }
});