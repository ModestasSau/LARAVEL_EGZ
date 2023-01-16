<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ "El. Parduotuvė Riestainis", config('app.name', 'Laravel') }}</title>

    <!-- Template Main CSS File -->

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">



    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/easing.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header trans_300">
            <!-- Top Navigation -->
            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">M. Saunorius egzamino projektas</div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">
                                    @auth
                                    @if(Auth::User()->usertype === 'ADMIN')
                                    <li class="account">
                                        <a href="{{url('/admin')}}">Admin valdymas</a>
                                    </li>
                                    @endif
                                    @endif
                                    <!-- My Account -->
                                    <li class="account">
                                        <a href="{{route('profile.edit')}}">
                                            Mano paskyra
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        @auth
                                        <ul class="account_selection">
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <a href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Atsijungti</a>
                                                </form>
                                            </li>
                                        </ul>

                                        @else
                                        <ul class="account_selection">
                                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Prisijungti</a></li>
                                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Registracija</a></li>
                                        </ul>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->
            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="{{ url('/') }}"><span>Riestainis</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{ url('/') }}">Pradžia</a></li>
                                    <li>
                                        <div class="dropdown">
                                            <a role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Kategorijos
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @foreach ($visoskategorijos as $kat)
                                                <a class="dropdown-item" href="{{ url('/prekes/'.$kat->id)}}">{{$kat->pavadinimas}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('prekes')}}">Visos prekės</a></li>
                                    <li><a href="{{route('kontaktai')}}">Kontaktai</a></li>
                                    <li>
                                        <div class="d-none d-xl-block">
                                            <form class="form-inline" action="{{ route('search') }}" method="GET" role="search">
                                                <input class="sm form-control mr-2xl" id="search" name="search" value="" style="border-radius: 5px;" type="search" placeholder="Search" aria-label="Search">
                                                <a role="button" onclick="if(document.getElementById('search').value != '' ) {this.closest('form').submit()}"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="navbar_user">
                                    <li class="checkout mr-3">
                                        <a href="{{ route('krepselis') }}">
                                            <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
                                            <span id="checkout_items" hidden class="checkout_items">0</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item">
                        <form class="m-3 form-inline justify-content-end" action="{{ route('search') }}" method="GET" role="search">
                            <input class="form-control" id="search1" name="search"  value="" style="border-radius: 5px; max-width: 300px; margin-right: 1.5rem;" type="search" placeholder="Paieška" aria-label="Search">
                            <a role="button" onclick="if(document.getElementById('search1').value != '' ){this.closest('form').submit()}"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
                        </form>
                    </li>
                    <li class="menu_item"><a href="{{ url('/') }}">Pradžia</a></li>
                    <li class="menu_item has-children">
                        <a role="button">
                            Kategorijos
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            @foreach ($visoskategorijos as $kat)
                            <li><a href="{{ url('/prekes/'.$kat->id)}}">{{$kat->pavadinimas}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu_item"><a href="{{ route('prekes')}}">Visos prekės</a></li>

                    @auth
                    <li class="menu_item has-children">
                        <a href="{{route('profile.edit')}}">Mano paskyra</a>
                    </li>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="menu_item">
                            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Atsijungti</a>
                        </li>
                    </form>

                    @else
                    <li class="menu_item"><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="false"></i> Prigijungti</a></li>
                    <li class="menu_item"><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="false"></i> Registracija</a></li>
                    @endauth
                    <li class="menu_item"><a href="{{route('kontaktai')}}">Kontaktai</a></li>
                    @auth
                    @if(Auth::User()->usertype === 'ADMIN')
                    <li class="menu_item">
                        <a href="{{url('/admin')}}">Admin valdymas</a>
                    </li>
                    @endif
                    @endif
                </ul>
            </div>
        </div>
        <!-- Page Content -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                            <ul class="footer_nav">
                                <li><a href="{{route('kontaktai')}}"><b>Kontaktai</b></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <div> 2022 Sukurta mokymosi tikslais.</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>