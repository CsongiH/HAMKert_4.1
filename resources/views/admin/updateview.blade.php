<!DOCTYPE html>
<html>
<head>
    <base href="/public">
</head>
<body>
<div class="container-scroller">

@include("admin.navbar")
    <div style="position: relative;top: 60px; right: -150px">
        <form class="clean-form" action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label style="padding: 30px">Title</label>
                <input style="color: #000000;" type="text" name="title" value="{{$data->title}}" >
            </div>
            <div>
                <label style="padding: 30px">Price</label>
                <input style="color: black" type="number" name="price" value="{{$data->price}}" >
            </div>
            <div>
                <label style="padding: 30px">Description</label>
                <input style="color: black" type="text" name="description" value="{{$data->description}}" >
            </div>
            <div>
                <label style="padding: 30px">Image</label>
                <img height="150" width="150" src="/foodimage/{{$data->image}}">
            </div>
            <div>
                <input style="color: blue" type="submit" value="Save">
            </div>
        </form>
    </div>
</div>

@include("admin.adminscript")
</body>
</html>
