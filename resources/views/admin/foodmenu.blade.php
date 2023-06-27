<x-app-layout></x-app-layout>
<html>
<head>
    @include("admin.admincss");
</head>
<body>
<div class="container-scroller">
@include("admin.navbar");
<div style="position: relative;top: 60px; right: -150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label style="padding: 30px">Title</label>
            <input style="color: black" type="text" name="title" placeholder="write a title" required>
        </div>
        <div>
            <label style="padding: 30px">Price</label>
            <input style="color: black" type="number" name="price" placeholder="write a price" required>
        </div>
        <div>
            <label style="padding: 30px">Image</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label style="padding: 30px">Description</label>
            <input style="color: black" type="text" name="description" placeholder="write a description" required>
        </div>
        <div>
            <input style="color: blue" type="submit" value="Save">
        </div>
    </form>

    <div>
        <table style="background-color: #000000">
            <tr>
                <th style="padding: 30px">Food Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action2</th>
            </tr>
            @foreach($data as $data)
            <tr text-align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img height="150" width="150" src="/foodimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
            </tr>
            @endforeach
        </table>
        <h4>list</h4>
        <h4>end</h4>


    </div>

</div>
</div>
@include("admin.adminscript");
</body>
</html>
