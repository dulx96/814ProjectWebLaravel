@foreach($orders as $order)
<tr id="{{ $order-> OrderID}}">
    <td>{{ $order-> OrderID}}</td>
    <td>{{ $order-> UserFirstName}}</td>
    <td>{{ $order-> UserID}}</td>
    <td>{{ $order-> OrderAmount}}</td>
    <td>{{$order->OrderShipAddress}}</td>
    <td>{{$order->OrderCity}}</td>
    <td>{{$order->OrderCountry}}</td>
    <td>{{$order->OrderPhone}}</td>
    <td>{{$order->OrderShipping}}</td>
    <td>{{$order->OrderTax}}</td>
    <td>{{$order->OrderEmail}}</td>
    <td>{{$order->OrderDate}}</td>
    <td>{{$order->OrderShipped}}</td>
    <td>
        <a href="/admin/orders/detail?id={{ $order->OrderID }}" class="btn
        btn-default">View Detail</a>
    </td>

</tr>
@endforeach