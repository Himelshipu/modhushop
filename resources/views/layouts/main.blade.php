<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'MODHUSHOP'}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/shop.ico">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/bootstrap.min.css') }}">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/font.awesome.min.css') }}">
<!-- Linear Icons CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/linearicons.min.css') }}">
<!-- Swiper CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/swiper-bundle.min.css') }}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/animate.min.css') }}">
<!-- Jquery ui CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/jquery-ui.min.css') }}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/nice-select.min.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/magnific-popup.css') }}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/style.css') }}">

</head>
<body id="app">


<!-- Header Area Start Here -->
<header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-sticky">
        <div class="container custom-area">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                    <div class="header-logo d-flex align-items-center">
                        <a href="{{ '/' }}">
                           <h3>MODHU<span class="text-danger">SHOP</span></h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                    <nav class="main-nav d-none d-lg-flex">
                        <ul class="nav">
                            <li>
                                <a href="{{ '/' }}" class="active">
                                    <span class="menu-text"> Home</span>
                                </a>

                            </li>
                            <li>
                                <a >
                                    <span class="menu-text">Category</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="mega-menu dropdown-hover">
                                    <div class="menu-colum">
                                        <ul>
                                            <li><span class="mega-menu-text">Product</span></li>
                                            <li><a href="product-details.html">Premium</a></li>
                                            <li><a href="variable-product-details.html">Average</a></li>
                                            <li><a href="external-product-details.html">Basic</a></li>
                                        </ul>
                                    </div>
                                   <div class="menu-colum">
                                     <ul>
                                            <li><span class="mega-menu-text">Order</span></li>
                                            <li><a href="{{ 'cart' }}">Cart Page</a></li>
                                            <li><a href="{{ 'check-out' }}">Checkout Page</a></li>
                                            <li><a href="{{ 'wish-list' }}">Wishlist Page</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <a href="{{ 'blog-list' }}">
                                    <span class="menu-text"> Blog</span>

                                </a>

                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text"> Pages</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-submenu dropdown-hover">
                                    <li><a href="{{ ('my-account') }}">Contact</a></li>
                                    <li><a href="{{ ('my-account') }}ml">My Account</a></li>
                                    <li><a href="frequently-questions.html">FAQ</a></li>
                                    <li>
                                        <a href="{{ 'about' }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </li>


                             @if (Route::has('login'))
                             @auth

                                 <li><a href="{{ url('/logout')  }}"><span class="menu-text">Logout</span></a></li>
                             @else

                                 <li><a href="{{ route('login') }}"><span class="menu-text">Login</span></a></li>
                                 @if (Route::has('register'))
                                 <li><a href="{{ route('register') }}"><span class="menu-text"> Register</span></a></li>
                                 @endif
                             @endauth

                     @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-6 col-6 col-custom">
                    <div class="header-right-area main-nav">
                        <ul class="nav">
                            <li class="minicart-wrap">
                                <a href="#" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-item_count">1</span>
                                </a>
                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <a href="{{ 'cart' }}"><img src="assets/images/cart/1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <h5 class="title"><a href="cart.html">Odio tortor consequat</a></h5>
                                            <div class="cart-text-btn">
                                                <div class="cart-qty">
                                                    <span>1×</span>
                                                    <span class="cart-price">$98.00</span>
                                                </div>
                                                <button type="button"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-price-total d-flex justify-content-between">
                                        <h5>Total :</h5>
                                        <h5>$166.00</h5>
                                    </div>
                                    <div class="cart-links d-flex justify-content-between">
                                        <a class="btn product-cart button-icon flosun-button dark-btn" href="{{ 'cart' }}">View cart</a>
                                        <a class="btn flosun-button secondary-btn rounded-0" href="{{ 'check-out' }}">Checkout</a>
                                    </div>
                                </div>
                            </li>
                            <li class="sidemenu-wrap">
                                <a href="#"><i class="fa fa-search"></i> </a>
                                <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                    <li>
                                        <form action="#">
                                            <input name="search" id="search" placeholder="Search" type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="account-menu-wrap d-none d-lg-flex">
                                <a href="#" class="off-canvas-menu-btn">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <li class="mobile-menu-btn d-lg-none">
                                <a class="off-canvas-btn" href="#">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{ 'home' }}">Home</a>

                            </li>
                            <li class="menu-item-has-children"><a href="#">Category</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title has-children"><a href="#">Product</a>
                                        <ul class="dropdown">

                                            <li><a href="product-details.html">Premium</a></li>
                                            <li><a href="variable-product-details.html">Average</a></li>
                                            <li><a href="external-product-details.html">Basic</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-title has-children"><a href="#">Order</a>
                                        <ul class="dropdown">

                                            <li><a href="{{ 'cart' }}">Cart Page</a></li>
                                            <li><a href="{{ 'check-out' }}">Checkout Page</a></li>
                                            <li><a href="{{ 'wish-list' }}">Wishlist Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="{{ 'blog-list' }}">Blog</a>

                            </li>
                            <li class="menu-item-has-children "><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="frequently-questions.html">FAQ</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="{{ 'about' }}">About Us</a></li>
                                    <li><a href="{{ 'contact' }}">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('login') }}"><span class="menu-text">Login</span></a></li>
                            <li><a href="{{ route('register') }}"><span class="menu-text"> Register</span></a></li>

                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <div class="offcanvas-widget-area">

                    <div class="top-info-wrap text-left text-black">
                        <ul class="address-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="info@yourdomain.com">(1245) 2456 012</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="info@yourdomain.com">info@yourdomain.com</a>
                            </li>
                        </ul>
                        <div class="widget-social">
                            <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-menu-wrapper" id="sideMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="off-canvas-inner">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <ul class="menu-top-menu">
                        <li><a href="{{ 'about' }}">About Us</a></li>
                    </ul>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="top-info-wrap text-left text-black">
                        <ul class="address-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="info@yourdomain.com">(1245) 2456 012</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="info@yourdomain.com">info@yourdomain.com</a>
                            </li>
                        </ul>
                        <div class="widget-social">
                            <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
</header>
<!-- Header Area End Here -->


    @yield('content')


     <!--Footer Area Start-->
     <footer class="footer-area mt-no-text">
        <div class="footer-widget-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                        <div class="single-footer-widget m-0">
                            <div class="footer-logo">
                                <a href="{{ ('/') }}">
                                    <h3><span class="text-white">MODHU</span><span class="text-danger">SHOP</span></h3>
                                </a>
                            </div>
                            <p class="desc-content">Lorem Khaled Ipsum is a major key to success. To be successful you’ve got to work hard you’ve got to make it.</p>
                            <div class="social-links">
                                <ul class="d-flex">
                                    <li>
                                        <a class="rounded-circle" href="#" title="Facebook">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rounded-circle" href="#" title="Vimeo">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="{{ 'about' }}">Our Company</a></li>
                                <li><a href="{{ 'contact' }}">Contact Us</a></li>
                                <li><a href="{{ 'about' }}">Our Services</a></li>
                                <li><a href="{{ 'about' }}">Why We?</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Quicklink</h2>
                            <ul class="widget-list">
                                <li><a href="{{ 'about' }}">About</a></li>
                                <li><a href="{{ 'blog-list' }}">Blog</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="{{ 'cart' }}">Cart</a></li>
                                <li><a href="{{ 'contact' }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Support</h2>
                            <ul class="widget-list">
                                <li><a href="{{ 'contact' }}">Online Support</a></li>
                                <li><a href="{{ 'contact' }}">Shipping Policy</a></li>
                                <li><a href="{{ 'contact' }}">Return Policy</a></li>
                                <li><a href="{{ 'contact' }}">Privacy Policy</a></li>
                                <li><a href="{{ 'contact' }}">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">See Information</h2>
                            <div class="widget-body">
                                <address>123, ABC, Road ##, Main City, Your address goes here.<br>Phone: 01234 567 890<br>Email: https://example.com</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container custom-area">
                <div class="row">
                    <div class="col-12 text-center col-custom">
                        <div class="copyright-content">
                            <p>Copyright © 2020   <strong> <span class="text-white">  MODHU </span><span class="text-danger">SHOP</span></strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Area End-->

<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper Slider JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<!-- nice select JS -->
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<!-- Ajaxchimpt js -->
<script src="{{ asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<!-- Jquery Ui js -->
<script src="{{asset ('assets/js/plugins/jquery-ui.min.js') }}"></script>
<!-- Jquery Countdown js -->
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<!-- jquery magnific popup js -->
<script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
