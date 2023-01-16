<!DOCTYPE html>
<html lang="en">

<head>
    <title>El. Parduotuvė Riestainis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">



    <!-- Template Main JS File -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/easing.js"></script>
    <script src="assets/js/custom.js"></script>
</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header trans_300">
            <!-- Top Navigation -->
            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="top_nav_left">
                                <a href="https://therichpost.com/laravel-8-jassarich-ecommerce-template-free-download/?ref=morioh.com&utm_source=morioh.com">Dizaino šablonas</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="top_nav_left">M. Saunorius</div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">

                                    <!-- My Account -->
                                    <li class="account">
                                        <a href="#">
                                            Mano paskyra
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Prigijungti</a></li>
                                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Registracija</a></li>
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
                                <a href="{{ url('/') }}/"><span>Riestainis</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{ url('/')}}">Pradžia</a></li>
                                    <li><a href="#">Prekės</a></li>
                                    <li><a href="#">Kontaktai</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
                    <li class="menu_item has-children">
                        <a href="#">
                            Mano paskyra
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Prigijungti</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Registracija</a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="#">Pradžia</a></li>
                    <li class="menu_item"><a href="#">Prekės</a></li>
                    <li class="menu_item"><a href="#">Kontaktai</a></li>
                </ul>
            </div>
        </div>

        <!-- Banner -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_item align-items-center">
                            <div class="banner_category">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Arrivals -->
        <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                            <!-- Product 1 -->
                            <div class="product-item men">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_1.png" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                        <div class="product_price">$520.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 2 -->
                            <div class="product-item women">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_2.png" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                        <div class="product_price">$610.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 3 -->
                            <div class="product-item women">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_3.png" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                        <div class="product_price">$120.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 4 -->
                            <div class="product-item accessories">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_4.png" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                        <div class="product_price">$410.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 5 -->
                            <div class="product-item women men">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_5.png" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Pryma Headphones, Rose Gold & Grey</a></h6>
                                        <div class="product_price">$180.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 6 -->
                            <div class="product-item accessories">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_6.png" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="##">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                        <div class="product_price">$520.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 7 -->
                            <div class="product-item women">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_7.png" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                        <div class="product_price">$610.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 8 -->
                            <div class="product-item accessories">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_8.png" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                        <div class="product_price">$120.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 9 -->
                            <div class="product-item men">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_9.png" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                        <div class="product_price">$410.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                            <!-- Product 10 -->
                            <div class="product-item men">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="assets/images/product_10.png" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="#">Pryma Headphones, Rose Gold & Grey</a></h6>
                                        <div class="product_price">$180.00</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefit -->
        <div class="benefit">
            <div class="container">
                <div class="row benefit_row">
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>free shipping</h6>
                                <p>Suffered Alteration in Some Form</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>cach on delivery</h6>
                                <p>The Internet Tend To Repeat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>45 days return</h6>
                                <p>Making it Look Like Readable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>opening all week</h6>
                                <p>8AM - 09PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</body>

</html>