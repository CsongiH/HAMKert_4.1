<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss");
</head>
<body>
<div class="container-scroller">
@include("admin.navbar");

    <div style="position: relative; top: 60px; right: -150px ">
        <table bgcollor="grey" border="3px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
            </tr>
            <@foreach($data as $data)
            <tr>
                <th style="padding: 30px">{{$data->name}}</th>
                <th style="padding: 30px">{{$data->email}}</th>
                @if($data->usertype=="0")
                    <th style="padding: 30px"><a href="{{url('/deleteuser', $data->id)}}">Delete</a></th>
                @else
                    <th style="padding: 30px">Not allowed</th>
            </tr>
                @endif
            @endforeach
        </table>
    </div>

    </div>
@include("admin.adminscript");
</body>
</html>
