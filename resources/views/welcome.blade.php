@extends('front.layouts.app')

@section('content')


<div class="top-bar top-bar-v1">
    <div class="col-full">
        <ul id="menu-top-bar-left" class="nav justify-content-center">
            <li class="menu-item animate-dropdown">
                <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket Market &#8211; Always free delivery</a>
            </li>
           
        </ul>
        <!-- .nav -->
    </div>
    <!-- .col-full -->
</div>
<!-- .top-bar-v1 -->
<header id="masthead" class="site-header header-v1" style="background-image: none; ">
    <div class="col-full desktop-only">
        <div class="techmarket-sticky-wrap">
            <div class="row">
                <div class="site-branding">
                    <a href="home-v1.html" class="custom-logo-link" rel="home">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill: #333e48;
                                    }
                                    
                                    .cls-1 {
                                        fill-rule: evenodd;
                                    }
                                    
                                    .cls-3 {
                                        fill: #3265b0;
                                    }
                                </style>
                            </defs>
                            <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                            <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                            <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                            <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                            <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                            <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                            <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                            <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                            <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                            <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                            <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                            <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                            <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                            <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                            <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                            <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                            <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                        </svg>
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
                <!-- /.site-branding -->
                <!-- ============================================================= End Header Logo ============================================================= -->
               
              
            </div>
            <!-- /.row -->
        </div>
        <!-- .techmarket-sticky-wrap -->
        <div class="row align-items-center">
            <div id="departments-menu" class="dropdown departments-menu">
                <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="tm tm-departments-thin"></i>
                    <span>All Locations</span>
                </button>
                <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                    
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Computers &#038; Laptops <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu.jpg" class="" alt="" />
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                        <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                        <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a></li>
                                                        <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                        <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                        <li><a href="shop.html">Networking &amp; Internet Devices</a></li>
                                                        <li><a href="shop.html">Computer Accessories</a></li>
                                                        <li><a href="shop.html">Software</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                        <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                        <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu-item menu-item-type-custom animate-dropdown">
                        <a title="Gadgets" href="landing-page-v1.html">Gadgets</a>
                    </li>
                    <li class="menu-item menu-item-type-custom animate-dropdown">
                        <a title="Virtual Reality" href="landing-page-v2.html">Virtual Reality</a>
                    </li>
                </ul>
            </div>
            <!-- .departments-menu -->
            <form class="navbar-search" method="get" action="home-v1.html">
                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                <div class="input-group">
                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                    <div class="input-group-addon search-categories popover-header">
                        <select name='product_cat' id='product_cat' class='postform resizeselect'>
                            <option value='0' selected='selected'>All Categories</option>
                            <option class="level-0" value="television">Televisions</option>
                           
                        </select>
                    </div>
                    <!-- .input-group-addon -->
                    <div class="input-group-btn input-group-append">
                        <input type="hidden" id="search-param" name="post_type" value="product" />
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                            <span class="search-btn">Search</span>
                        </button>
                    </div>
                    <!-- .input-group-btn -->
                </div>
                <!-- .input-group -->
            </form>
            <!-- .navbar-search -->
        </div>
        <!-- /.row -->
    </div>
    <!-- .col-full -->
    <div class="col-full handheld-only">
        <div class="handheld-header">
            <div class="row">
                <div class="site-branding">
                    <a href="home-v1.html" class="custom-logo-link" rel="home">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill: #333e48;
                                    }
                                    
                                    .cls-1 {
                                        fill-rule: evenodd;
                                    }
                                    
                                    .cls-3 {
                                        fill: #3265b0;
                                    }
                                </style>
                            </defs>
                            <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                            <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                            <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                            <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                            <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                            <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                            <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                            <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                            <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                            <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                            <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                            <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                            <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                            <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                            <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                            <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                            <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                        </svg>
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
              
            </div>
            <!-- /.row -->
            <div class="techmarket-sticky-wrap">
                <div class="row">
                    <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                        <button class="btn navbar-toggler" type="button">
                            <i class="tm tm-departments-thin"></i>
                            <span>Menu</span>
                        </button>
                        <div class="handheld-navigation-menu">
                            <span class="tmhm-close">Close</span>
                            <ul id="menu-departments-menu-1" class="nav">
                               
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Computers &#038; Laptops <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu.jpg" class="" alt="" />
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Computers &amp; Accessories</li>
                                                                    <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                                    <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a></li>
                                                                    <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                    <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                    <li><a href="shop.html">Networking &amp; Internet Devices</a></li>
                                                                    <li><a href="shop.html">Computer Accessories</a></li>
                                                                    <li><a href="shop.html">Software</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Office &amp; Stationery</li>
                                                                    <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                                    <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- .handheld-navigation-menu -->
                    </nav>
                    <!-- .handheld-navigation -->
                    <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                <input type="submit" value="Search" />
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </div>
                        <!-- .widget -->
                    </div>
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- .techmarket-sticky-wrap -->
        </div>
        <!-- .handheld-header -->
    </div>
    <!-- .handheld-only -->
</header>
<!-- .header-v1 -->
<!-- ============================================================= Header End ============================================================= -->
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
           
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="shop-control-bar">
                        <div class="handheld-sidebar-toggle">
                            <button type="button" class="btn sidebar-toggler">
                                <i class="fa fa-sliders"></i>
                                <span>Filters</span>
                            </button>
                        </div>
                        <!-- .handheld-sidebar-toggle -->
                        <h1 class="woocommerce-products-header__title page-title">Available Products</h1>
                       
                       
                    </div>
                    <!-- .shop-control-bar -->
                    <div class="tab-content">
 
                        <!-- .tab-pane -->
                        <div id="grid-extended"  role="tabpanel">
                            <div class="woocommerce columns-7">
                                <div class="products">
                                    <div class="product first">
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{ asset('front/assets/images/products/1.jpg') }}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                        </a>
                                       
                                       
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <li>Multimedia Speakers</li>
                                                <li>120 watts peak</li>
                                                <li>Front-facing subwoofer</li>
                                               
                                            </ul>
                                        </div>
                                      
                                    </div>
                                    <!-- .product -->
                                    <div class="product ">
                                       
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{ asset('front/assets/images/products/2.jpg') }}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                        </a>
                                      
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <li>Multimedia Speakers</li>
                                                <li>120 watts peak</li>
                                                <li>Front-facing subwoofer</li>
                                              
                                            </ul>
                                        </div>
                                     
                                    </div>
                                    <!-- .product -->
                                    <div class="product ">
                                       
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{ asset('front/assets/images/products/3.jpg') }}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                        </a>
                                       
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <li>Multimedia Speakers</li>
                                                <li>120 watts peak</li>
                                                <li>Front-facing subwoofer</li>
                                                
                                            </ul>
                                        </div>
                                      
                                    </div>
                                    <!-- .product -->
                                    <div class="product ">
                                      
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{ asset('front/assets/images/products/4.jpg') }}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                        </a>
                                       
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <li>Multimedia Speakers</li>
                                                <li>120 watts peak</li>
                                                <li>Front-facing subwoofer</li>
                                                <li>Refresh Rate: 120Hz (Effective)</li>
                                               
                                            </ul>
                                        </div>
                                      
                                    </div>
                                  
                                  
                                    <!-- .product -->
                                    <div class="product last">
                                       
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{ asset('front/assets/images/products/7.jpg') }}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                        </a>
                                       
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <li>Multimedia Speakers</li>
                                                <li>120 watts peak</li>
                                                <li>Front-facing subwoofer</li>
                                                <li>Refresh Rate: 120Hz (Effective)</li>
                                              
                                            </ul>
                                        </div>
                                      
                                    </div>
                                   
                                   
                    <div class="shop-control-bar-bottom">
                        <form class="form-techmarket-wc-ppp" method="POST">
                            <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                <option value="20">Show 20</option>
                                <option value="40">Show 40</option>
                                <option value="-1">Show All</option>
                            </select>
                            <input type="hidden" value="5" name="shop_columns">
                            <input type="hidden" value="15" name="shop_per_page">
                            <input type="hidden" value="right-sidebar" name="shop_layout">
                        </form>
                        <!-- .form-techmarket-wc-ppp -->
                        <p class="woocommerce-result-count">
                            Showing 1&ndash;15 of 73 results
                        </p>
                        <!-- .woocommerce-result-count -->
                        <nav class="woocommerce-pagination">
                            <ul class="page-numbers">
                                <li>
                                    <span class="page-numbers current">1</span>
                                </li>
                                <li><a href="#" class="page-numbers">2</a></li>
                                <li><a href="#" class="page-numbers">3</a></li>
                                <li><a href="#" class="page-numbers">4</a></li>
                                <li><a href="#" class="page-numbers">5</a></li>
                                <li><a href="#" class="next page-numbers">→</a></li>
                            </ul>
                            <!-- .page-numbers -->
                        </nav>
                        <!-- .woocommerce-pagination -->
                    </div>
                    <!-- .shop-control-bar-bottom -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
<!-- #content -->
<footer class="site-footer footer-v1">
    <div class="col-full">
        <div class="before-footer-wrap">
            <div class="col-full">
                <div class="footer-newsletter">
                    <div class="media">
                        <i class="footer-newsletter-icon tm tm-newsletter"></i>
                        <div class="media-body">
                            <div class="clearfix">
                                <div class="newsletter-header">
                                    <h5 class="newsletter-title">Sign up to Newsletter</h5>
                                    <span class="newsletter-marketing-text">...and receive
                                        <strong>important updates from us</strong>
                                    </span>
                                </div>
                                <!-- .newsletter-header -->
                                <div class="newsletter-body">
                                    <form class="newsletter-form">
                                        <input type="text" placeholder="Enter your email address">
                                        <button class="button" type="button">Sign up</button>
                                    </form>
                                </div>
                                <!-- .newsletter body -->
                            </div>
                            <!-- .clearfix -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .footer-newsletter -->
                <div class="footer-social-icons">
                    <ul class="social-icons nav">
                        <li class="nav-item">
                            <a class="sm-icon-label-link nav-link" href="#">
                                <i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a class="sm-icon-label-link nav-link" href="#">
                                <i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                        <li class="nav-item">
                            <a class="sm-icon-label-link nav-link" href="#">
                                <i class="fa fa-google-plus"></i> Google+</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- .footer-social-icons -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- .before-footer-wrap -->
        <div class="footer-widgets-block">
            <div class="row">
                <div class="footer-contact">
                    
                    <!-- .footer-logo -->
                    <div class="contact-payment-wrap">
                        <div class="footer-contact-info">
                            <div class="media">
                                <span class="media-left icon media-middle">
                                    <i class="tm tm-call-us-footer"></i>
                                </span>
                                <div class="media-body">
                                    <span class="call-us-title">Got Questions ? Call us 24/7!</span>
                                    <span class="call-us-text">08127842009, 08134949093</span>
                                    <address class="footer-contact-address">Behind festac hotel, along Head bridge, Katsina-ala. Benue State</address>
                                   
                                </div>
                                <!-- .media-body -->
                            </div>
                            <!-- .media -->
                        </div>
                      
                    </div>
                    <!-- .contact-payment-wrap -->
                </div>
              
            </div>
            <!-- .row -->
        </div>
        <!-- .footer-widgets-block -->
        <div class="site-info">
            <div class="col-full">
                <div class="copyright">Copyright &copy; <?php echo date("Y"); ?> <a href="home-v1.html">Techmarket</a> Theme. All rights reserved.</div>
                <!-- .copyright -->
                <div class="credit">Made with
                    <i class="fa fa-heart"></i> by Felix.</div>
                <!-- .credit -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- .site-info -->
    </div>
    <!-- .col-full -->
</footer>
<!-- .site-footer -->

@endsection