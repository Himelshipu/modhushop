@extends('layouts.main')
@section('content')

 <!-- Header Area Start Here -->
 <header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-sticky">
        <div class="container custom-area">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                    <div class="header-logo d-flex align-items-center">
                        <a href="index.html">
                            <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                    <nav class="main-nav d-none d-lg-flex">
                        <ul class="nav">
                            <li>
                                <a href="index.html">
                                    <span class="menu-text"> Home</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>                      
                            </li>
                            <li>
                                <a class="active" href="shop.html">
                                    <span class="menu-text">Shop</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="mega-menu dropdown-hover">
                                    <div class="menu-colum">
                                        <ul>
                                            <li><span class="mega-menu-text">Shop</span></li>
                                            <li><a class="active" href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                            <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-colum">
                                        <ul>
                                            <li><span class="mega-menu-text">Product</span></li>
                                            <li><a href="product-details.html">Single Product</a></li>
                                            <li><a href="variable-product-details.html">Variable Product</a></li>
                                            <li><a href="external-product-details.html">External Product</a></li>
                                            <li><a href="gallery-product-details.html">Gallery Product</a></li>
                                            <li><a href="countdown-product-details.html">Countdown Product</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-colum">
                                        <ul>
                                            <li><span class="mega-menu-text">Others</span></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="blog-details-fullwidth.html">
                                    <span class="menu-text"> Blog</span>
                                </a>                             
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text"> Pages</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </li>
                            <li>
                                <a href="about-us.html">
                                    <span class="menu-text"> About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.html">
                                    <span class="menu-text">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-6 col-6 col-custom">
                    <div class="header-right-area main-nav">
                        <ul class="nav">
                            <li class="minicart-wrap">
                                <a href="#" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-item_count">3</span>
                                </a>
                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <a href="cart.html"><img src="assets/images/cart/1.jpg" alt=""></a>
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
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <a href="cart.html"><img src="assets/images/cart/2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <h5 class="title"><a href="cart.html">Integer eget augue</a></h5>
                                            <div class="cart-text-btn">
                                                <div class="cart-qty">
                                                    <span>1×</span>
                                                    <span class="cart-price">$98.00</span>
                                                </div>
                                                <button type="button"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <a href="cart.html"><img src="assets/images/cart/3.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <h5 class="title"><a href="cart.html">Eleifend quam</a></h5>
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
                                        <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.html">View cart</a>
                                        <a class="btn flosun-button secondary-btn rounded-0" href="checkout.html">Checkout</a>
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
                            <li class="menu-item-has-children"><a href="#">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                            <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">Product Details</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Single Product Details</a></li>
                                            <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                            <li><a href="external-product-details.html">External Product Details</a></li>
                                            <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                            <li><a href="countdown-product-details.html">Countdown Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">Others</a>
                                        <ul class="dropdown">
                                            <li><a href="error404.html">Error 404</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wish List Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a></li>
                            <li class="menu-item-has-children "><a href="#">Pages</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
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
                        <li><a href="about-us.html">About Us</a></li>
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


  <!-- Slider/Intro Section Start -->
  <div class="intro11-slider-wrap section-2 mrl-50">
    <div class="intro11-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="intro11-section swiper-slide slide-4 slide-bg-2 bg-position">
                <!-- Intro Content Start -->
                <div class="intro11-content-2 text-center">
                    <h1 class="different-title">Welcome</h1>
                    <h2 class="title">2020 Flower Trend</h2>
                    <a href="product-details.html" class="btn flosun-button secondary-btn theme-color rounded-0">Shop Now</a>
                </div>
                <!-- Intro Content End -->
            </div>
            <div class="intro11-section swiper-slide slide-3 slide-bg-2 bg-position">
                <!-- Intro Content Start -->
                <div class="intro11-content text-left">
                    <h3 class="title-slider text-uppercase">Top Trend</h3>
                    <h2 class="title">Flowers and Candle <br> Birthday Gift</h2>
                    <p class="desc-content">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. Autem fierent ullamcorper ius no, nec ea quodsi invenire. </p>
                    <a href="product-details.html" class="btn flosun-button secondary-btn rounded-0">Shop Now</a>
                </div>
                <!-- Intro Content End -->
            </div>
        </div>
        <!-- Slider Navigation -->
        <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
        <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
        <!-- Slider pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Slider/Intro Section End -->


<div class="shop-main-area">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-12 col-custom widget-mt">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper mb-30">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i class="fa fa-th"></i></button>
                        <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                    <div class="shop-select">
                        <form class="d-flex flex-column w-100" action="#">
                            <div class="form-group">
                                <select class="form-control nice-select w-100">
                                    <option selected value="1">Alphabetically, A-Z</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!--shop toolbar end-->

<!-- Shop Wrapper Start -->
<div class="row shop_wrapper grid_3">
    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
        <div class="product-item">
            <div class="single-product position-relative mr-0 ml-0">
                <div class="product-image">
                    <a class="d-block" href="product-details.html">
                        <img src="assets/images/product/3.jpg" alt="" class="product-image-1 w-100">
                        <img src="assets/images/product/4.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                        <a href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                        </a>
                        <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Jasmine flowers white</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                </div>
                <div class="product-content-listview">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Jasmine flowers white</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                    <div class="button-listview">
                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                        <a class="list-icon" href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                        </a>
                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
        <div class="product-item">
            <div class="single-product position-relative mr-0 ml-0">
                <div class="product-image">
                    <a class="d-block" href="product-details.html">
                        <img src="assets/images/product/5.jpg" alt="" class="product-image-1 w-100">
                        <img src="assets/images/product/6.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <span class="onsale">Sale!</span>
                    <div class="add-action d-flex flex-column position-absolute">
                        <a href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                        </a>
                        <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Blossom bouquet flower</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                </div>
                <div class="product-content-listview">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Blossom bouquet flower</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                    <div class="button-listview">
                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                        <a class="list-icon" href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                        </a>
                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
        <div class="product-item">
            <div class="single-product position-relative mr-0 ml-0">
                <div class="product-image">
                    <a class="d-block" href="product-details.html">
                        <img src="assets/images/product/7.jpg" alt="" class="product-image-1 w-100">
                        <img src="assets/images/product/8.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                        <a href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                        </a>
                        <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Orchid flower red stick</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                </div>
                <div class="product-content-listview">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Orchid flower red stick</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                    <div class="button-listview">
                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                        <a class="list-icon" href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                        </a>
                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
        <div class="product-item">
            <div class="single-product position-relative mr-0 ml-0">
                <div class="product-image">
                    <a class="d-block" href="product-details.html">
                        <img src="assets/images/product/9.jpg" alt="" class="product-image-1 w-100">
                        <img src="assets/images/product/1.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                        <a href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                        </a>
                        <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                </div>
                <div class="product-content-listview">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                    <div class="button-listview">
                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                        <a class="list-icon" href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                        </a>
                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
        <div class="product-item">
            <div class="single-product position-relative mr-0 ml-0">
                <div class="product-image">
                    <a class="d-block" href="product-details.html">
                        <img src="assets/images/product/8.jpg" alt="" class="product-image-1 w-100">
                        <img src="assets/images/product/7.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <span class="onsale">Sale!</span>
                    <div class="add-action d-flex flex-column position-absolute">
                        <a href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                        </a>
                        <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                </div>
                <div class="product-content-listview">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$80.00</span>
                        <span class="old-price"><del>$90.00</del></span>
                    </div>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                    <div class="button-listview">
                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                        <a class="list-icon" href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                        </a>
                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
        <div class="product-item">
            <div class="single-product position-relative mr-0 ml-0">
                <div class="product-image">
                    <a class="d-block" href="product-details.html">
                        <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                        <img src="assets/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <span class="onsale">Sale!</span>
                    <div class="add-action d-flex flex-column position-absolute">
                        <a href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                        </a>
                        <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink stick</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$60.00</span>
                        <span class="old-price"><del>$70.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Add to Cart</a>
                </div>
                <div class="product-content-listview">
                    <div class="product-title">
                        <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink stick</a></h4>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="price-box">
                        <span class="regular-price ">$60.00</span>
                        <span class="old-price"><del>$70.00</del></span>
                    </div>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                    <div class="button-listview">
                        <a href="cart.html" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Add to Cart</span> </a>
                        <a class="list-icon" href="compare.html" title="Compare">
                            <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                        </a>
                        <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Shop Wrapper End -->

<!-- Bottom Toolbar Start -->
<div class="row">
    <div class="col-sm-12 col-custom">
        <div class="toolbar-bottom">
            <div class="pagination">
                <ul>
                    <li class="current">1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#">next</a></li>
                    <li><a href="#">&gt;&gt;</a></li>
                </ul>
            </div>
            <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result</p>
        </div>
    </div>
</div>
<!-- Bottom Toolbar End -->


            </div>