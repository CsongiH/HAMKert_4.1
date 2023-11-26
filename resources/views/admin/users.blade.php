
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/HAMK.css">
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
            @foreach($data as $userdata)
            <tr>
                <td style="padding: 30px">{{$userdata->name}}</td>
                <td style="padding: 30px">{{$userdata->email}}</td>
                @if($userdata->usertype=="0")
                    <td style="padding: 30px"><a class="clean-admin-action" href="{{url('/deleteuser', $userdata->id)}}">Törlés</a></td>
                @else
                    <td style="padding: 30px">Nem törölhető</td>
            </tr>
                @endif
            @endforeach
        </table>
    </div>

    </div>
@include("admin.adminscript")
</body>
</html>
