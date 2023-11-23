
<html>
<head>
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
</head>
@include("admin.admincss")
<body>

<div class="container-scroller" >
    @include("admin.navbar")
    <div style="position: relative; top: 70px;right: -150px">
<table class="clean-table">
    <tr>
        <th>userid</th>
        <th>orders</th>
        <th>del</th>
    </tr>
    @foreach($orders as $order)
        <tr>
            <td>{{$order->user_id}}</td>
            <td>{{$order->food_titles}}</td>
            <td><a href="{{url('/doneOrder',$order->user_id)}}">Törlés</a></td>
        </tr>


    @endforeach


</table>
    </div>
    </div>
@include("admin.adminscript")
</body>
</html>
