<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--

    TemplateMo 558 Klassy Cafe

    https://templatemo.com/tm-558-klassy-cafe

    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/redirects" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/redirects" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="/redirects">About</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Menu</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Chefs</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Contact Us</a></li>

                        <li class="scroll-to-section" style="background-color: #fa5849" >
                            @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    Cart[{{$count}}]
                                </a>
                            @endauth

                            @guest
                                <a href="{{url('/login')}}">
                                    Cart[0]
                                </a>
                            @endguest

                        </li>

                        <li>
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <li>
                                <x-app-layout></x-app-layout>
                            </li>
                        @else
                            <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                            @if (Route::has('register'))
                                <li>   <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                @endif
                @endauth
            </div>
            @endif

            </li>

            </ul>
            <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
    </div>
</header>
<div id="top">
<table>
    <tr text-align="center" background-color="grey">
        <th style="padding: 30px">Food Name</th>
        <th style="padding: 30px">Price</th>
        <th style="padding: 30px">Quantity</th>
    </tr>

        @foreach($data as $data)
        <tr>
            <td style="text-align: center" >{{$data->title}}</td>
            <td style="text-align: center" >{{$data->price}}</td>
            <td style="text-align: center" >{{$data->quantity}}</td>
            <td><a href="{{url('/remove',$data->id)}}" class="btn btn-warning">Remove</a></td>
            <!--fogalmam sincs, eddig jo volt -->
        @endforeach

        </tr>

</table>
</div>





<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
</body>
</html>
