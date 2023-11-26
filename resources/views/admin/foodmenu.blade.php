
<html>
<head>
    <link rel="stylesheet" href="assets/css/HAMK.css">
</head>
@include("admin.admincss")
<body>
<div class="container-scroller" style="height:fit-content; padding-bottom: 100px">
@include("admin.navbar")

<div style="position: relative;top: 60px; right: -150px">
    <form class="HAM-form" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label>Étel</label>
            <input style="color: ghostwhite" type="text" name="title" placeholder="Adja meg az étel nevét" required>
        </div>
        <div>
            <label>Ár</label>
            <input style="color: ghostwhite" type="number" name="price" placeholder="Adja meg az étel árát" required>
        </div>
        <div>
            <label>Kép</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label>Leírás</label>
            <input style="color: ghostwhite" type="text" name="description" placeholder="Adja meg az étel leírását" required>
        </div>
        <div>
            <input class="HAM-button" type="submit" value="Mentés">
        </div>
    </form>

    <div>
        <table class="HAM-table">
            <tr>
                <th style="padding-top: 30px;padding-bottom: 30px;text-align: left">Étel</th>
                <th style="padding-top: 30px;padding-bottom: 30px;padding-right: 50px;text-align: center">Ár</th>
                <th style="padding-top: 30px;padding-bottom: 30px;text-align: left">Leírás</th>
                <th style="padding: 30px;text-align: center">Kép</th>
                <th style="padding: 30px;text-align: center">Módosítás</th>
                <th style="padding: 30px;text-align: center">Törlés</th>
            </tr>
            @foreach($data as $fooddata)
            <tr>
                <td>{{$fooddata->title}}</td>
                <td>{{$fooddata->price}}</td>
                <td>{{$fooddata->description}}</td>
                <td><img height="150" width="150" src="/foodimage/{{$fooddata->image}}"></td>
                <td><a class="HAM-admin-action" href="{{url('/updateview',$fooddata->id)}}">Frissítés</a></td>
                <td><a class="HAM-admin-action" href="{{url('/deletemenu',$fooddata->id)}}">Törlés</a></td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
</div>
<div>{{$data->links()}}</div>
@include("admin.adminscript")
</body>
</html>
