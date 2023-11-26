<link rel="stylesheet" href="assets/css/HAMK.css">
@include("admin.admincss")

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">



            <li class="nav-item nav-category">
                <span class="nav-link">Navigáció</span>
            </li>



            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
                    <span class="menu-title">Felhasználók</span>
                </a>
            </li>



            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-food-apple"></i>
              </span>
                    <span class="menu-title">Ételek</span>
                </a>
            </li>



            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/adminorders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-food-fork-drink"></i>
              </span>
                    <span class="menu-title">Rendelések</span>
                </a>
            </li>



            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clock"></i>
              </span>
                    <span class="menu-title">Asztalfoglalások</span>
                </a>
            </li>


            @auth


                <li class="nav-item menu-items">
                    <a href="{{ route('profile.show') }}" class="nav-link">
                        <span class="menu-icon">
                <i class="mdi mdi-account-badge"></i>
              </span>
                        <span class="menu-title">Profilom </span></a>
                </li>


                <li class="nav-item menu-items">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <span class="menu-title">
                            <button
                                href="{{ route('logout') }}"
                                class="clean-button-admin">
                                {{ __('Kilépés') }}
                            </button>
                        </span>
                    </form>
                </li>
            @endauth




        </ul>
    </nav>


