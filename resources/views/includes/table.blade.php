@foreach($products as $product)
<tr>
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
        <button value="{{ $product->ProductID }}" class="button-delete btn
        btn-default">Delete
        </button>
    </td>
    <td>
        <button value="{{ $product->ProductID }}" class="button-edit btn
        btn-default">Edit
        </button>
    </td>
</tr>
@endforeach
