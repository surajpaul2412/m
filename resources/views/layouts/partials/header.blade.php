<!-- [ Topbar ] start--> 
<div class="top-info-bar style1 d-none d-lg-block d-md-block">
    <div class="topBar-slider-style1 alert fade show" role="alert">
        <div class="item text-uppercase text-center d-flex align-items-center justify-content-center">
            <a href="#">Purchase This Incredible Products Now! Sale end In</a>
            <!--Countdown Timer-->
            <div class="promo-counter days-time" data-countdown="2024/10/01"></div>
            <!--End Countdown Timer-->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="an an-times-l"></i></button>
        </div>
        <div class="item text-center d-flex align-items-center justify-content-center">
            Up to <b class="mx-2 blueText">80% Off</b> on entire store! hurry up! <a href="shop-top-filter.html" class="btn btn-small mx-2">Shop Now</a> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="an an-times-l"></i></button>
        </div>
    </div>
</div> 

<!-- [ Header ] start-->
<header id="header" class="header header-main mih-70 d-flex align-items-center">
    <div class="container-fluid">        
        <div class="row">
            <!--Logo / Menu Toggle-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 align-self-center justify-content-start d-flex">
                <!--Mobile Toggle-->
                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                <!--End Mobile Toggle-->
                <!--Logo-->
                <div class="logo"><a href="./"><img class="logo-img" src="images/logo.png" alt="" title="" /><span class="logo-txt d-none">MbizSpare</span></a></div>
                <!--End Logo-->
            </div>
            
            <!--Main Navigation Desktop-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-7 align-self-center d-menu-col">
                <nav class="grid__item" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium left hidearrow">
                        <li class="lvl1"><a href="#;">Home</a></li>
                        <li class="lvl1"><a href="#;">About Us</a></li> 
                        <li class="lvl1 parent dropdown"><a href="#">Shop <i class="an an-angle-down-l"></i></a>
                            <ul class="dropdown">  
                                <li><a href="#" class="site-nav">Brake System</a></li>
                                <li><a href="#" class="site-nav">Clutch System</a></li>
                                <li><a href="#" class="site-nav">Belts Chains</a></li> 
                                <li><a href="#" class="site-nav">Air Conditioning</a></li> 
                            </ul>
                        </li> 
                        <li class="lvl1"><a href="#;">Testimonials</a></li>  
                        <li class="lvl1"><a href="#;">Contact Us</a> </li>
                    </ul>
                </nav>
            </div> 

            <!--Right Action-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center icons-col d-flex justify-content-end">
                <!--Search-->
                <!-- <div class="site-search iconset"><i class="icon an an-search-l"></i><span class="tooltip-label">Search</span></div> -->

                <!-- User -->
                <div class="wishlist-link iconset">
                    <a href="{{route('login')}}"><i class="icon an an-user-expand"></i><span class="tooltip-label">Account</span></a>
                </div>  

                <!--Wishlist-->
                <div class="wishlist-link iconset">
                    <a href="#"><i class="icon an an-heart-l"></i><span class="wishlist-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span><span class="tooltip-label">Wishlist</span></a>
                </div>
                 
                <!--Minicart Drawer-->
                <div class="header-cart iconset">
                    <a href="#" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                        <i class="icon an an-sq-bag"></i><span class="site-cart-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">2</span><span class="tooltip-label">Cart</span>
                    </a>
                </div> 

            </div>
            <!--End Right Action-->
        </div>
    </div>
    <!--Search Popup-->
    <div id="search-popup" class="search-drawer">
        <div class="container">
            <span class="closeSearch an an-times-l"></span>
            <form class="form minisearch" id="header-search" action="#" method="get">
                <label class="label"><span>Search</span></label>
                <div class="control">
                    <div class="searchField"> 
                        <div class="input-box">
                            <button type="submit" title="Search" class="action search" disabled=""><i class="icon an an-search-l"></i></button>
                            <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--End Search Popup-->
</header> 

<!-- [ Mobile Menu ] start-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1"><a href="./">Home</a></li> 
        <li class="lvl1"><a href="#">About Us</a></li> 
        <li class="lvl1 parent megamenu"><a href="#">Shop <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">Brake System</a></li>
                <li><a href="#" class="site-nav">Clutch System</a></li>
                <li><a href="#" class="site-nav">Belts Chains</a></li> 
                <li><a href="#" class="site-nav">Air Conditioning</a></li> 
            </ul>
        </li> 
        <li class="lvl1"><a href="#">Contact Us</a></li> 
        <li class="acLink"></li>
        <li class="lvl1 bottom-link"><a href="#">Login</a></li>
        <li class="lvl1 bottom-link"><a href="#">Signup</a></li>
        <li class="lvl1 bottom-link"><a href="#">Wishlist</a></li> 
        <li class="help bottom-link"><b>NEED HELP?</b><br>Call: +91-8076179211</li>
    </ul>
</div>
<!--End Mobile Menu--> 