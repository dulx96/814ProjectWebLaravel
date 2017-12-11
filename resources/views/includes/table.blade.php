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
    <td>{{$product->ProductUpdateDate}}</td>
    <td>{{$product->ProductQuantity}}</td>
    <td>
        <a href="/admin/addel?id={{ $product->ProductID }}" class=" btn
        btn-default">Edit</a>
    </td>
    <td>
        <button class="btn btn-default button-delete" value="{{ $product->ProductID }}">
            Delete
        </button>
    </td>
</tr>
@endforeach
