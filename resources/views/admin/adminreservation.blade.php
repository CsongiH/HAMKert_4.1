<head>

</head>
<body>

<div class="container-scroller">
@include("admin.navbar")

<div style="position: relative; top: 70px;right: -150px">
    <table class="clean-table">
        <tr text-align="center" >
            <th style="padding: 30px">Név</th>
            <th style="padding: 30px">E-Mail</th>
            <th style="padding: 30px">Telefon</th>
            <th style="padding: 30px">Dátum</th>
            <th style="padding: 30px">Idő</th>
            <th style="padding: 30px">Megjegyzés</th>
        </tr>


        @foreach($data as $data)
        <tr text-align="center" >
            <th style="padding: 30px">{{$data->name}}</th>
            <th style="padding: 30px">{{$data->email}}</th>
            <th style="padding: 30px">{{$data->phone}}</th>
            <th style="padding: 30px">{{$data->date}}</th>
            <th style="padding: 30px">{{$data->time}}</th>
            <th style="padding: 30px">{{$data->message}}</th>
        </tr>
        @endforeach
    </table>
</div>
</div>
@include("admin.adminscript")
</body>
</html>
