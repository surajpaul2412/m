
<!-- [ Sticky Menubar Mobile ] start-->
<div class="menubar-mobile d-flex align-items-center justify-content-between d-lg-none">
    <div class="menubar-shop menubar-item">
        <a href="#"><i class="menubar-icon an an-th-large-l"></i><span class="menubar-label">Shop</span></a>
    </div>
    <div class="menubar-account menubar-item">
        <a href="#"><span class="menubar-icon an an-user-expand"></span><span class="menubar-label">Account</span></a>
    </div>
    <div class="menubar-search menubar-item">
        <a href="#"><span class="menubar-icon an an-home-l"></span><span class="menubar-label">Home</span></a>
    </div>
    <div class="menubar-wish menubar-item">
        <a href="#">
            <span class="span-count position-relative text-center"><span class="menubar-icon an an-heart-l"></span><span class="menubar-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span></span>
            <span class="menubar-label">Wishlist</span>
        </a>
    </div>
    <div class="menubar-cart menubar-item">
        <a href="#" class="cartBtn" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
            <span class="span-count position-relative text-center"><span class="menubar-icon an an-sq-bag"></span><span class="menubar-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">2</span></span>
            <span class="menubar-label">Cart</span>
        </a>
    </div>
</div> 


<!-- [ MiniCart Drawer ] start-->
<div class="minicart-right-drawer modal right fade" id="minicart-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--MiniCart Empty-->
            <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                <div class="minicart-header d-flex-center justify-content-between w-100">
                    <h4 class="fs-6">Your cart (0 Items)</h4>
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                </div>
                <div class="cartEmpty-content mt-4">
                    <i class="icon an an-sq-bag fs-1 text-muted"></i>
                    <p class="my-3">No Products in the Cart</p>
                    <a href="#" class="btn btn-primary cart-btn rounded">Continue shopping</a>
                </div>
            </div>
            <!--End MiniCart Empty-->

            <!--MiniCart Content-->
            <div id="cart-drawer" class="block block-cart">
                <div class="minicart-header">
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                    <h4 class="fs-6">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="clearfix">
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="#">
                                <img class="blur-up lazyload" src="assets/images/products/1.jpg" alt="image" title="" width="100" height="120" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="#">Floral Crop Top</a>
                                <div class="variant-cart">Black / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$59.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="#">
                                <img class="blur-up lazyload" src="assets/images/products/2.jpg" alt="image" title="" width="100" height="120">
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="#">V Neck T-shirts</a>
                                <div class="variant-cart">Blue / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$199.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="shipinfo text-center mb-3 text-uppercase">
                        <p class="freeShipMsg"><i class="an an-truck fs-5 me-2 align-middle"></i>SPENT <b>$199.00</b> MORE FOR FREE SHIPPING</p>
                    </div>
                    <div class="subtotal">
                        <span>Total:</span>
                        <span class="product-price">$93.13</span>
                    </div>
                    <a href="#" class="w-100 p-2 my-2 btn btn-outline-primary proceed-to-checkout rounded">Proceed to Checkout</a>
                    <a href="#" class="w-100 btn btn-primary cart-btn rounded">View Cart</a>
                </div>
            </div>
            <!--End MiniCart Content-->
        </div>
    </div>
</div> 
<div class="modalOverly"></div>
 

<!-- [ Addtocart Added Popup ] start -->
<!-- <div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="addtocart-inner text-center clearfix">
        <h4 class="title mb-3 text-success">Added to your shopping cart successfully.</h4>
        <div class="pro-img mb-3">
            <img class="img-fluid blur-up lazyload" src="assets/images/products/add-to-cart-popup.jpg" data-src="assets/images/products/add-to-cart-popup.jpg" alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully." width="600" height="508" />
        </div>
        <div class="pro-details">
            <h5 class="pro-name mb-0">Ditsy Floral Dress</h5>
            <p class="sku my-2">Color: Gray</p>
            <p class="mb-0 qty-total">1 X $113.88</p>
            <div class="addcart-total bg-light mt-3 mb-3 p-2">
                Total: <b class="price">$113.88</b>
            </div>
            <div class="button-action">
                <a href="#" class="btn btn-primary view-cart mx-1 rounded">Go To Checkout</a>
                <a href="#" class="btn btn-secondary rounded">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>  -->


<!-- [ Product Promotion Popup ] start-->
<!-- <div class="product-notification" id="dismiss">
    <span class="close" aria-hidden="true"><i class="an an-times-r"></i></span>
    <div class="media d-flex">
        <a href="#"><img class="mr-2 blur-up lazyload" src="assets/images/products/product-3.jpg" data-src="assets/images/products/product-3.jpg" alt="Trim Button Front Blouse" /></a>
        <div class="media-body">
            <h5 class="mt-0 mb-1">Someone purchsed a</h5>
            <p class="pname"><a href="#">Trim Button Front Blouse</a></p>
            <p class="detail">14 Minutes ago from New York, USA</p>
        </div>
    </div>
</div> --> 


<!-- [ Newsletter Popup ] start -->
<!-- <div id="newsletter-modal" class="style1 mfp-with-anim mfp-hide">
    <div class="d-flex flex-column">
        <div class="newsltr-img d-none d-sm-none d-md-block"><img class="blur-up lazyload" src="assets/images/newsletter-img.webp" data-src="assets/images/newsletter-img.webp" alt="image" width="550" height="290"></div>
        <div class="newsltr-text text-center">
            <div class="wraptext">
                <p><b>GET THE UPDATES ABOUT LATEST TREANDS</b></p>
                <h2 class="title fw-normal mb-4">20% OFF YOUR FIRST ORDER</h2>
                <form action="#" method="post" class="mcNewsletter mb-4">
                    <div class="input-group d-flex flex-nowrap">
                        <input type="email" class="rounded-start newsletter__input" name="EMAIL" value="" placeholder="Email address" required>
                        <span><button type="submit" class="btn mcNsBtn rounded-end" name="commit"><span>Subscribe</span></button></span>
                    </div>
                </form>
                <div class="customCheckbox justify-content-center checkboxlink clearfix mb-3">
                    <input id="dontshow" name="newsPopup" type="checkbox" />
                    <label for="dontshow" class="pt-1">Don't show this popup again</label>
                </div>
                <p>Your information will never be shared</p>
            </div>
        </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>  -->