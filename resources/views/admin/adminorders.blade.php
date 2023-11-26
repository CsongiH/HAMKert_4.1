
<html>
<head>
    <link rel="stylesheet" href="HAMK.css">
</head>
@include("admin.admincss")
<body>

<div class="container-scroller" >
    @include("admin.navbar")
    <div style="position: relative; top: 70px;right: -150px">

<table class="HAM-table">
    <tr>
        <th>Azonosító</th>
        <th>Rendelés tartalma</th>
        <th>Törlés</th>
    </tr>
    @foreach($orders as $order)
        <tr>
            <td>{{$order->user_id}}</td>
            <td>{{$order->food_titles}}</td>
            <td><a class="HAM-admin-action" href="{{url('/doneOrder',$order->user_id)}}">Kész</a></td>
        </tr>


    @endforeach
</table>
    </div>
    </div>
<div>{{$orders->links()}}</div>
@include("admin.adminscript")
</body>
</html>
