<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#top" class="logo"><img src="assets/images/klassy-logo.png" id="logo-image"></a></li>
                        <li class="scroll-to-section"><a href="#top">Főoldal</a></li>
                        <li class="scroll-to-section"><a href="#about">Rólunk</a></li>
                        <li class="scroll-to-section"><a href="/redirects">Menü</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Alapítók</a></li>
                        <li class="scroll-to-section"><a href="#reservation">Kapcsolat</a></li>
                        <li class="scroll-to-section" style="background-color: rgba(231,231,231,0.91); border-radius: 20px " >
                            @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    Kosár[{{$count }}]
                                </a>
                            @endauth

                            @guest
                                <a href="{{url('/login')}}">
                                    Kosár[0]
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
