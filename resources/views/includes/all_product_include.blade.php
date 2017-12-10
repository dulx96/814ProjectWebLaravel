
@foreach($result["products"] as $product)
    @include("includes.bestsell_thumbnail")
@endforeach

<div class="modal fade" id="item_modal" tabindex="-1" role="dialog"
     aria-labelledby="item_modal_label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="item_modal_body">

            </div>
        </div>
    </div>
</div>

