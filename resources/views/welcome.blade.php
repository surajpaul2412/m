@extends('layouts.frontend.app')

@section('title')
<title>{{env('APP_NAME')}}</title>
@endsection

@section('css')

@endsection

@section('content')  
<div id="page-content">
    <!-- [ Home Slider ] start -->
    <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" src="{{asset('images/slider/slide-01.jpg')}}"  />
                    <img class="blur-up lazyload mobile-hide" src="{{asset('images/slider/mobile-slide-01.jpg')}}" /> 
                </div>
            </div> 
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" src="{{asset('images/slider/slide-01.jpg')}}"  />
                    <img class="blur-up lazyload mobile-hide" src="{{asset('images/slider/mobile-slide-01.jpg')}}" /> 
                </div>
            </div> 
        </div>
    </section>
    <!-- [ Home Slider ] End -->  

    <!-- [ Category Slider ] start -->
    <section class="section category-slider border-bottom">
        <div class="container-fluid"> 

            <div class="category-carousel slider-gp30 arwOut3">
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/1.png" alt="Category image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Maintenance Service</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/2.png" alt="Category image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Air Conditioning</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/3.png" alt="Category Image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Clutch System</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/4.png" alt="Category Image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Filters</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/5.png" alt="Category Image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Belts Chains</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/6.png" alt="Category Image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Bearings</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/7.png" alt="Category Image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Brake System</h3>
                        </div>
                    </a>
                </div>
                <div class="category-item zoomscal-hov">
                    <a href="#" class="category-grid-link text-center">
                        <div class="img zoom-scal zoom-scal-nopb rounded-circle d-flex justify-content-center">
                            <img class="blur-up lazyload" src="assets/images/icons/8.png" alt="Category Image" />
                        </div>
                        <div class="details mt-3">
                            <h3 class="category-item-title text-capitalize fs-6 body-font p-0 m-0">Car Accessories</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Category Slider ] end -->

    <!-- [ Latest Products ] start -->
    <section class="section lastest-product border-bottom bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 section-header style1">
                    <div class="section-header-left">
                        <h2>Latest <span class="head-change-color">Products</span></h2> 
                    </div>
                </div>
            </div>

            <div class="grid-products">
                <div class="row row-cols-2 row-cols-lg-4">
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>  
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>   
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>   
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>   
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>   
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>   
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div>   
                    
                    <!-- Single product -->
                    <div class="item">
                        <div class="product-box border rounded">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <a href="product-details.php" class="product-img">
                                    <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                    <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                                
                                    <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                </a>
                                <!--end product image-->

                                <!--Product Button-->
                                <div class="button-set-top position-absolute style1">
                                    <!--Wishlist Button-->
                                    <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                        <i class="icon an an-heart-l"></i>
                                        <span class="tooltip-label">Add To Wishlist</span>
                                    </a> 
                                </div>
                                <div class="button-set-bottom position-absolute style1">
                                    <!--Cart Button-->
                                    <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                        <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                    </a>
                                    <!--End Cart Button-->
                                </div>
                                <!--End Product Button-->
                            </div>

                            <!--Start Product Details-->
                            <div class="product-details text-start p-2">
                                
                                <!--Product Ratings-->
                                <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                    <span>4.1</span>
                                    <span><i class="bi bi-star-fill"></i></span>
                                    <span>|</span>
                                    <span class="text-success">30.6k</span> 
                                </div>

                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="product-details.php">Air Conditioning</a>
                                </div>
                                
                                <!--Product Price--> 
                                <div class="product-price">
                                    <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                                </div>  

                                <!--Color Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                    <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                    <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                    <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                    <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                </ul>  -->

                            </div> 
                        </div> 
                    </div> 

                </div>
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <a href="#" class="btn-primary btn-lg rounded button-all">Shop All</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- [ End Best Seller ] End -->

    <!-- [ Brand Logo Slider ] start -->
    <section class="section logo-section">
        <div class="container-fluid">
            <div class="section-header">
                <h2>Brands we <span class="head-change-color">Trust</span></h2>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-bar">
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/1.jpg" alt="brand" title="" /></a>
                        </div>
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/2.jpg" alt="brand" title="" /></a>
                        </div>
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/3.jpg" alt="brand" title="" /></a>
                        </div>
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/4.jpg" alt="brand" title="" /></a>
                        </div>
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/5.jpg" alt="brand" title="" /></a>
                        </div>
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/7.jpg" alt="brand" title="" /></a>
                        </div>
                        <div class="logo-bar__item">
                            <a href="#"><img class="blur-up lazyload" src="assets/images/brands/8.jpg" alt="brand" title="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Brand Logo Slider ] End--> 
    
    <!-- [ Testimonial Slider ] start -->
    <section class="section testimonial-slider style1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 section-header style1">
                    <div class="section-header-left">
                        <h2>Our Clients <span class="head-change-color">Love us!</span></h2>
                    </div>
                </div>
            </div>
            <div class="quote-wraper">
                <!--Testimonial Slider Items-->
                <div class="quotes-slider">
                    <div class="quotes-slide">
                        <blockquote class="quotes-slider__text text-center">
                            <div class="testimonial-image"><img class="blur-up lazyload" src="assets/images/testimonials/1.jpg" alt="" title="" /></div>
                            <div class="rte-setting">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div> 
                            <p class="authour">Shetty Jamie,</p>
                            <p class="cmp-name">Kollision</p>
                        </blockquote>
                    </div>
                    <div class="quotes-slide">
                        <blockquote class="quotes-slider__text text-center">
                            <div class="testimonial-image"><img class="blur-up lazyload" src="assets/images/testimonials/2.jpg" alt="" title="" /></div>
                            <div class="rte-setting">
                                <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software PageMaker including versions readable content page.</p>
                            </div> 
                            <p class="authour">Sara Colinton,</p>
                            <p class="cmp-name">Pel</p>
                        </blockquote>
                    </div>
                    <div class="quotes-slide">
                        <blockquote class="quotes-slider__text text-center">
                            <div class="testimonial-image"><img class="blur-up lazyload" src="assets/images/testimonials/3.jpg" alt="" title="" /></div>
                            <div class="rte-setting">
                                <p>Scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic of remaining essentially 1960s.</p>
                            </div> 
                            <p class="authour">Hamlet Tuong,</p>
                            <p class="cmp-name">OPL</p>
                        </blockquote>
                    </div>
                    <div class="quotes-slide">
                        <blockquote class="quotes-slider__text text-center">
                            <div class="testimonial-image"><img class="blur-up lazyload" src="assets/images/testimonials/4.jpg" alt="" title="" /></div>
                            <div class="rte-setting">
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum.</p>
                            </div> 
                            <p class="authour">Happy Customer,</p>
                            <p class="cmp-name">CPL</p>
                        </blockquote>
                    </div>
                </div>
                <!--Testimonial Slider Items-->
            </div>
        </div>
    </section>
    <!-- [ Testimonial Slider ] End -->

    <!-- [ Popular Product Slider ] start -->
    <section class="section product-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="section-header text-uppercase col-12">
                    <h2>Most Popular <span class="head-change-color">Products</span></h2>
                    <!-- <p>Shop The Latest</p> -->
                </div>
            </div>
            <div class="productSlider grid-products">  
                <!-- Single product -->
                <div class="item">
                    <div class="product-box border rounded">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <a href="product-details.php" class="product-img">
                                <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                            
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            </a>
                            <!--end product image-->

                            <!--Product Button-->
                            <div class="button-set-top position-absolute style1">
                                <!--Wishlist Button-->
                                <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                    <i class="icon an an-heart-l"></i>
                                    <span class="tooltip-label">Add To Wishlist</span>
                                </a> 
                            </div>
                            <div class="button-set-bottom position-absolute style1">
                                <!--Cart Button-->
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                    <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                </a>
                                <!--End Cart Button-->
                            </div>
                            <!--End Product Button-->
                        </div>

                        <!--Start Product Details-->
                        <div class="product-details text-start p-2">
                            
                            <!--Product Ratings-->
                            <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                <span>4.1</span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span>|</span>
                                <span class="text-success">30.6k</span> 
                            </div>

                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-details.php">Air Conditioning</a>
                            </div>
                            
                            <!--Product Price--> 
                            <div class="product-price">
                                <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                            </div>  

                            <!--Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>  -->

                        </div> 
                    </div> 
                </div> 
                
                <!-- Single product -->
                <div class="item">
                    <div class="product-box border rounded">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <a href="product-details.php" class="product-img">
                                <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                            
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            </a>
                            <!--end product image-->

                            <!--Product Button-->
                            <div class="button-set-top position-absolute style1">
                                <!--Wishlist Button-->
                                <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                    <i class="icon an an-heart-l"></i>
                                    <span class="tooltip-label">Add To Wishlist</span>
                                </a> 
                            </div>
                            <div class="button-set-bottom position-absolute style1">
                                <!--Cart Button-->
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                    <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                </a>
                                <!--End Cart Button-->
                            </div>
                            <!--End Product Button-->
                        </div>

                        <!--Start Product Details-->
                        <div class="product-details text-start p-2">
                            
                            <!--Product Ratings-->
                            <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                <span>4.1</span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span>|</span>
                                <span class="text-success">30.6k</span> 
                            </div>

                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-details.php">Air Conditioning</a>
                            </div>
                            
                            <!--Product Price--> 
                            <div class="product-price">
                                <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                            </div>  

                            <!--Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>  -->

                        </div> 
                    </div> 
                </div> 
                
                <!-- Single product -->
                <div class="item">
                    <div class="product-box border rounded">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <a href="product-details.php" class="product-img">
                                <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                            
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            </a>
                            <!--end product image-->

                            <!--Product Button-->
                            <div class="button-set-top position-absolute style1">
                                <!--Wishlist Button-->
                                <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                    <i class="icon an an-heart-l"></i>
                                    <span class="tooltip-label">Add To Wishlist</span>
                                </a> 
                            </div>
                            <div class="button-set-bottom position-absolute style1">
                                <!--Cart Button-->
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                    <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                </a>
                                <!--End Cart Button-->
                            </div>
                            <!--End Product Button-->
                        </div>

                        <!--Start Product Details-->
                        <div class="product-details text-start p-2">
                            
                            <!--Product Ratings-->
                            <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                <span>4.1</span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span>|</span>
                                <span class="text-success">30.6k</span> 
                            </div>

                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-details.php">Air Conditioning</a>
                            </div>
                            
                            <!--Product Price--> 
                            <div class="product-price">
                                <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                            </div>  

                            <!--Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>  -->

                        </div> 
                    </div> 
                </div> 
                
                <!-- Single product -->
                <div class="item">
                    <div class="product-box border rounded">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <a href="product-details.php" class="product-img">
                                <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                            
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            </a>
                            <!--end product image-->

                            <!--Product Button-->
                            <div class="button-set-top position-absolute style1">
                                <!--Wishlist Button-->
                                <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                    <i class="icon an an-heart-l"></i>
                                    <span class="tooltip-label">Add To Wishlist</span>
                                </a> 
                            </div>
                            <div class="button-set-bottom position-absolute style1">
                                <!--Cart Button-->
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                    <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                </a>
                                <!--End Cart Button-->
                            </div>
                            <!--End Product Button-->
                        </div>

                        <!--Start Product Details-->
                        <div class="product-details text-start p-2">
                            
                            <!--Product Ratings-->
                            <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                <span>4.1</span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span>|</span>
                                <span class="text-success">30.6k</span> 
                            </div>

                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-details.php">Air Conditioning</a>
                            </div>
                            
                            <!--Product Price--> 
                            <div class="product-price">
                                <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                            </div>  

                            <!--Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>  -->

                        </div> 
                    </div> 
                </div> 
                
                <!-- Single product -->
                <div class="item">
                    <div class="product-box border rounded">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <a href="product-details.php" class="product-img">
                                <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                            
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            </a>
                            <!--end product image-->

                            <!--Product Button-->
                            <div class="button-set-top position-absolute style1">
                                <!--Wishlist Button-->
                                <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                    <i class="icon an an-heart-l"></i>
                                    <span class="tooltip-label">Add To Wishlist</span>
                                </a> 
                            </div>
                            <div class="button-set-bottom position-absolute style1">
                                <!--Cart Button-->
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                    <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                </a>
                                <!--End Cart Button-->
                            </div>
                            <!--End Product Button-->
                        </div>

                        <!--Start Product Details-->
                        <div class="product-details text-start p-2">
                            
                            <!--Product Ratings-->
                            <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                <span>4.1</span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span>|</span>
                                <span class="text-success">30.6k</span> 
                            </div>

                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-details.php">Air Conditioning</a>
                            </div>
                            
                            <!--Product Price--> 
                            <div class="product-price">
                                <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                            </div>  

                            <!--Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>  -->

                        </div> 
                    </div> 
                </div> 
                
                <!-- Single product -->
                <div class="item">
                    <div class="product-box border rounded">
                        <!--Start Product Image-->
                        <div class="product-image">
                            <a href="product-details.php" class="product-img">
                                <img class="primary blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="800" height="960">
                                <img class="hover blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="800" height="960">
                            
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            </a>
                            <!--end product image-->

                            <!--Product Button-->
                            <div class="button-set-top position-absolute style1">
                                <!--Wishlist Button-->
                                <a class="btn-icon wishlist add-to-wishlist rounded" href="#">
                                    <i class="icon an an-heart-l"></i>
                                    <span class="tooltip-label">Add To Wishlist</span>
                                </a> 
                            </div>
                            <div class="button-set-bottom position-absolute style1">
                                <!--Cart Button-->
                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup w-90" href="#pro-addtocart-popup">
                                    <i class="icon an an-cart-l"></i> <span>Add To Cart</span>
                                </a>
                                <!--End Cart Button-->
                            </div>
                            <!--End Product Button-->
                        </div>

                        <!--Start Product Details-->
                        <div class="product-details text-start p-2">
                            
                            <!--Product Ratings-->
                            <div class="product-ratingsContainer d-inline-block text-success bg-success bg-opacity-25 px-2 rounded">
                                <span>4.1</span>
                                <span><i class="bi bi-star-fill"></i></span>
                                <span>|</span>
                                <span class="text-success">30.6k</span> 
                            </div>

                            <!--Product Name-->
                            <div class="product-name text-uppercase">
                                <a href="product-details.php">Air Conditioning</a>
                            </div>
                            
                            <!--Product Price--> 
                            <div class="product-price">
                                <span class="old-price">Rs.169.00</span> <span class="price">Rs.155.00</span>
                            </div>  

                            <!--Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                            </ul>  -->

                        </div> 
                    </div> 
                </div> 
                
            </div>
        </div>
    </section>
    <!-- [ Popular Product Slider ] End -->
    
    <!-- [ Store Feature ] start -->
    <section class="section store-features pt-0">
        <div class="container-fluid"> 

            <div class="row store-info">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-4 mb-md-0">
                    <i class="icon an an-ship-fast m-0"></i>
                    <div class="detail mt-3">
                        <h4 class="body-font">Free Shipping</h4>
                        <p class="sub-text">Avail Free &amp; Safe shipping in serviceable pin codes. Check before you place an order.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-4 mb-md-0">
                    <i class="icon an an-payment-security m-0"></i>
                    <div class="detail mt-3">
                        <h4 class="body-font">Secure Payments</h4>
                        <p class="sub-text">Your data security &amp; privacy is our priority. Pay securely through 128 bit encrypted payment gateway</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-4 mb-sm-3 mb-md-0">
                    <i class="icon an an-tags-l m-0"></i>
                    <div class="detail mt-3">
                        <h4 class="body-font">Exclusive Offers</h4>
                        <p class="sub-text">Now enjoy the benefits of JL exclusive offers. Subscribe JL .com to remain updated on latest offers</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-3 mb-md-0">
                    <i class="icon an an-tools m-0"></i>
                    <div class="detail mt-3">
                        <h4 class="body-font">Hassle Free Installation</h4>
                        <p class="sub-text">Once you place order on JL.com your installation request will be generated post-delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Store Feature ] end -->

</div>
@endsection

@section('script') 

@endsection
