
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
</head>
<body>
<div class="container-scroller">
@include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px ">
        <table class="clean-table">
            <tr>
                <th style="padding: 30px">Név</th>
                <th style="padding: 30px">E-Mail</th>
                <th style="padding: 30px">Módosítás</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <th style="padding: 30px">{{$data->name}}</th>
                <th style="padding: 30px">{{$data->email}}</th>
                @if($data->usertype=="0")
                    <th style="padding: 30px"><a href="{{url('/deleteuser', $data->id)}}">Törlés</a></th>
                @else
                    <th style="padding: 30px">Nem törölhető</th>
            </tr>
                @endif
            @endforeach
        </table>
    </div>

    </div>
@include("admin.adminscript")
</body>
</html>
