
<form method="get" action="/search">
    <div class="input-group" id="adv-search">
        <input type="text" id="search_text" name="key" class="form-control" placeholder="Search for products"/>
        <div class="input-group-btn">
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-primary">
                <span class="fa fa-search"
                      aria-hidden="true">
                </span></button>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $('#search_text').autocomplete({
        source: "/search/autocomplete",
        minLength:1,
        select: function(event, ui) {
            $('#search_text').val(ui.item.value);
        }
    });
</script>