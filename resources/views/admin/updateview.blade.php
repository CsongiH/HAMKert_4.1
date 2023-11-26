<!DOCTYPE html>
<html>
<head>
    <base href="/public">
</head>
<body>
<div class="container-scroller">

@include("admin.navbar")
    <div style="position: relative;top: 60px; right: -150px; width: 70vw;height: fit-content;padding-bottom: 60px">
        <form class="HAM-form" action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label >Név</label>
                <input type="text" name="title" value="{{$data->title}}" >
            </div>
            <div>
                <label >Ár</label>
                <input type="number" name="price" value="{{$data->price}}" >
            </div>
            <div>
                <label >Leírás</label>
                <input type="text" name="description" value="{{$data->description}}" >
            </div>
            <div>
                <label >Kép</label>
                <img height="150" width="150" src="/foodimage/{{$data->image}}">
            </div>
            <div>
                <input style="margin-top: 10px" class="HAM-button" type="submit" value="Mentés">
            </div>
        </form>
    </div>
</div>

@include("admin.adminscript")
</body>
</html>
