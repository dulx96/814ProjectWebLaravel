@foreach($products as $product)
<tr id="{{ $product-> ProductID}}">
    <td>{{ $product-> ProductID}}</td>
    <td>{{ $product-> ProductSKU}}</td>
    <td>{{$product->ProductName}}</td>
    <td class="desc">
        <div>
            {{$product->ProductDescription}}
        </div>
    </td>
    <td>{{$product->ProductManufacturer}}</td>
    <td>{{$product->ProductPrice}}</td>
    <td>{{$product->ProductWeight}}</td>
    <td>{{$product->ProductCategoryID}}</td>
    <td>{{$product->DetailQuantity}}</td>
</tr>
@endforeach
