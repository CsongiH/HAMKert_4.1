<!DOCTYPE html>
<html lang=hu>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>HAMKert étterem</title>
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
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#top" class="logo"><img src="assets/images/hamkert.png" id="logo-image"></a></li>
                        <li class="scroll-to-section"><a href="#top">Főoldal</a></li>
                        <li class="scroll-to-section"><a href="#about">Rólunk</a></li>
                        <li class="scroll-to-section"><a href="{{url('/menu')}}"> Menü </a> </li>
                        <li class="scroll-to-section"><a href="#chefs">Alapítók</a></li>
                        <li class="scroll-to-section"><a href="#reservation">Kapcsolat</a></li>
                        <li class="scroll-to-section" style="background-color: rgba(231,231,231,0.91); border-radius: 20px ">
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
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section class="section" id="top">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>HAMKert</h4>
                        <h6>Ételbe zárt csoda</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Asztalfoglalás</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Rólunk</h6>
                        <h2>A HAMKert története</h2>
                    </div>
                    <p>A HAMKert éttermet Horváth Csongor, Antal Kristóf és Magasi Botond egy borozó lepusztult épületéből hozták létre 2023-ban. A három barát mindig is lelkes gasztronómiai rajongók voltak, és a közös szenvedélyükből született meg az ötlet, hogy egyedi kulináris élményeket kínáljanak az érdeklődőknek.
                        <br><br>
                        Az étterem koncepciója a magas minőségű alapanyagok és a kreatív konyhaművészet köré épül. A séfek olyan ínycsiklandó fogásokat alkotnak, amelyek egyesítik a hagyományos helyi ízeket a modern gasztronómiai technikákkal. A menü változatos, figyelembe véve a szezonalitást és a helyi termelők friss alapanyagait.
                        <br><br>
                        Az étterem nem csupán egy hely, ahol az emberek étkeznek, hanem egy közösségi tér, ahol az ételek és az emberek egyaránt összekapcsolódnak. A HAMKert a jó hangulat, kiváló ételek és barátságos kiszolgálás otthonos helyét teremti meg, és mindenkinek lehetőséget ad arra, hogy részese legyen ennek a gasztronómiai kalandnak.
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <img src="assets/images/about-video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Alapítók</h6>
                    <h2>A HAMKert megálmodói</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <img src="assets/images/chefs-01.jpg" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Horváth Csongor</h4>
                        <span>Pastry Chef</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <img src="assets/images/chefs-02.jpg" alt="Chef #2">
                    </div>
                    <div class="down-content">
                        <h4>Antal Kristóf</h4>
                        <span>Cookie Chef</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <img src="assets/images/chefs-03.jpg" alt="Chef #3">
                    </div>
                    <div class="down-content">
                        <h4>Magasi Botond</h4>
                        <span>Pancake Chef</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

@include("reservation")

<!-- ***** Footer Start ***** -->
<footer style=" margin-top: 0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="#top"><img src="assets/images/hamkert.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© HAMKert

                        <br>2023</p>
                </div>
            </div>
        </div>
    </div>
</footer>

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
