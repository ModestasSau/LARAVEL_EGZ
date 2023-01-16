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
                                    <li class="account">
                                        <a href="{{url('/')}}">Vartotojo vaizdas</a>
                                    </li>
                                    <!-- My Account -->
                                    <li class="account">
                                        <a href="{{route('profile.admEdit')}}">
                                            Mano paskyra
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <a href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Atsijungti</a>
                                                </form>
                                            </li>
                                        </ul>
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
                                <a href="{{ route('index') }}"><span>Riestainis</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{ route('index') }}">Pradžia</a></li>
                                    <li><a href="{{ route('prekes-index') }}">Prekių valdymas</a></li>
                                    <li><a href="{{ route('kategorijos-index') }}">Kategorijų valdymas</a></li>
                                    <li><a href="{{ route('user-index') }}">Vartotojų valdymas</a></li>
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
                    <li class="menu_item"><a href="{{ route('index') }}">Pradžia</a></li>
                    <li class="menu_item"><a href="{{ route('prekes-index') }}">Prekių valdymas</a></li>
                    <li class="menu_item"><a href="{{ route('kategorijos-index') }}">Kategorijų valdymas</a></li>
                    <li class="menu_item"><a href="{{ route('user-index') }}">Vartotojų valdymas</a></li>
                    <li class="menu_item has-children">
                        <a href="{{ route('profile.admEdit') }}">
                            Mano paskyra
                        </a>
                    </li>
                    <form class="menu_item" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Atsijungti</a>
                    </form>
                    <li class="menu_item">
                        <a href="{{url('/')}}">Vartotojo vaizdas</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Content -->
        <main>
            <div class="new_arrivals">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <div class="space"></div>
        <footer class="footer">
            <div class="container">
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