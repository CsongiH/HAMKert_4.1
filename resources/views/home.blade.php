<!DOCTYPE html>
<html lang=hu>

<head>
    @include("headdata")
</head>

<body>


<!-- ***** Header eleje ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Menu eleje ***** -->
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
                                                             class="HAM-button">
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

                    <!-- ***** Menu vege ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header vege ***** -->

<!-- ***** Banner eleje ***** -->
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
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Banner vege ***** -->

<!-- ***** About eleje ***** -->
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
<!-- ***** About vege ***** -->

<!-- ***** HAM eleje ***** -->
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
                        <img src="assets/images/HorvathCsongor.png" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Horváth Csongor</h4>
                        <span>Séfkonyhafőnök</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <img src="assets/images/AntalKristof.jpg" alt="Chef #2">
                    </div>
                    <div class="down-content">
                        <h4>Antal Kristóf</h4>
                        <span>Konyhamester</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <img src="assets/images/MagasiBotond.jpg" alt="Chef #3">
                    </div>
                    <div class="down-content">
                        <h4>Magasi Botond</h4>
                        <span>Étteremigazgató</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** HAM vege ***** -->

@include("reservation")

<!-- ***** Footer eleje ***** -->
<footer style=" margin-top: 0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
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
@include("scripts")
</body>
</html>
