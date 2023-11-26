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

    <link rel="stylesheet" href="assets/css/HAMK.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Menu Start ***** -->


                    <ul class="nav">
                        <li><a href="/redirects" class="logo"><img src="assets/images/hamkert.png" id="logo-image"></a></li>
                        <li class="scroll-to-section"><a href="/redirects">Főoldal</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Rólunk</a></li>
                        <li class="scroll-to-section"><a href="{{url('/menu')}}">Menü</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Alapítók</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Kapcsolat</a></li>
                        <li class="scroll-to-section" style="background-color: rgba(231,231,231,0.91); border-radius: 20px " >
                            @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    Kosár
                                </a>
                            @endauth

                            @guest
                                <a href="{{url('/login')}}">
                                    Kosár
                                </a>
                            @endguest

                        </li>
                        <!-- Felhasznalo actionok eleje -->
                        <li>
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-left">
                        @auth
                            <li><a href="{{ route('profile.show') }}">
                                    Profilom
                                </a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button  href="{{ route('logout') }}"
                                             class="clean-button">
                                        {{ __('Kilépés') }}
                                    </button>
                                </form>
                            </li>

                        @else
                            <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Bejelentkezés</a></li>

                            @if (Route::has('register'))
                                <li>   <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Regisztrálás</a></li>
                @endif
                @endauth
            </div>
            @endif


            <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
    </div>
</header>

<div id="top" style="display: flex;justify-content: center;align-items: center;margin-top: 100px">
<table style="padding: 10px; alignment: center">
    <tr>
        <th style="padding: 30px">Étel neve</th>
        <th style="padding: 30px">Ár</th>
        <th style="padding: 30px">Mennyiség</th>
    </tr>
@if($count == 0)
        <tr>
            <th>Nincs semmi a kosaradban.</th>
        </tr>
@endif
        @foreach($data as $cartdata)
            @if($cartdata->isPaid == 0 AND $cartdata->isDone == 0)
        <tr style="margin: 50px">
            <td style="text-align: center;padding: 10px" >{{$cartdata->title}}</td>
            <td style="text-align: center;padding: 10px" >{{$cartdata->price}}</td>
            <td style="text-align: center;padding: 10px" >{{$cartdata->quantity}}</td>
            <td><a href="{{url('/remove',$cartdata->item_id)}}" class="btn btn-warning" style="background-color: #FA5849FF;border: transparent">Törlés</a></td>
            @endif
        @endforeach

        </tr>
</table>
</div>
<div style="display: flex;justify-content: center;align-items: center">
    <form action="/session" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" id="checkout-live-button" class="clean-checkout-button" >Tovább a fizetéshez -></button>
    </form>
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
