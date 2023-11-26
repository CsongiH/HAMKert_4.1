<head>

</head>
<body>

<div class="container-scroller">
@include("admin.navbar")
<div style="padding-top: 10vh">
    <table class="clean-table">
        <tr text-align="center" >
            <th style="font-weight: bolder; padding: 30px">Név</th>
            <th style="font-weight: bolder; padding: 30px">E-Mail</th>
            <th style="font-weight: bolder; padding: 30px">Telefon</th>
            <th style="font-weight: bolder; padding: 30px">Dátum</th>
            <th style="font-weight: bolder; padding: 30px">Idő</th>
            <th style="font-weight: bolder; padding: 30px">Fő</th>
            <th style="font-weight: bolder; padding: 30px">Megjegyzés</th>
        </tr>


        @foreach($data as $reservationdata)
        <tr text-align="center" >
            <td style="padding: 30px">{{$reservationdata->name}}</td>
            <td style="padding: 30px">{{$reservationdata->email}}</td>
            <td style="padding: 30px">{{$reservationdata->phone}}</td>
            <td style="padding: 30px">{{$reservationdata->date}}</td>
            <td style="padding: 30px">{{$reservationdata->time}}</td>
            <td style="padding: 30px">{{$reservationdata->guest}}</td>
            <td style="padding: 30px">{{$reservationdata->message}}</td>
        </tr>
        @endforeach
    </table>
</div>
</div>
<div>{{$data->links()}}</div>
@include("admin.adminscript")
</body>
</html>
