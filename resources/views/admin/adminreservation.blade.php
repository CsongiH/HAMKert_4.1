<head>
    @include("admin.admincss");
</head>
<body>
<x-app-layout></x-app-layout>
<div class="container-scroller">
@include("admin.navbar");

<div style="position: relative; top: 70px;right: -150px">
    <table >
        <tr text-align="center" >
            <th style="padding: 30px">name</th>
            <th style="padding: 30px">email</th>
            <th style="padding: 30px">phone</th>
            <th style="padding: 30px">date</th>
            <th style="padding: 30px">time</th>
            <th style="padding: 30px">Message</th>
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
@include("admin.adminscript");
</body>
</html>
