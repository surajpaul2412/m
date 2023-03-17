<div class="vertical-menu"> 
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-chat">Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/customers') ? 'active' : '' }}">
                    <a href="{{route('admin.customers')}}" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-chat">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-contact"></i>
                        <span key="t-dashboards">Sellers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <!-- <li><a href="">All Seller</a></li>   -->
                        <li><a href="{{route('admin.verified-sellers')}}">Verified Seller</a></li>   
                        <li><a href="{{route('admin.unverified-sellers')}}">Unverified Seller</a></li>   
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shopping-bag"></i>
                        <span key="t-dashboards">Manage Store</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="products.php">All Product</a></li> 
                        <li><a href="#">In House Products</a></li>   
                        <li><a href="#">Seller Products</a></li>  
                        <li><a href="product-category.php">Product Category</a></li>  
                        <li><a href="product-type.php">Product Type</a></li>   
                        <li><a href="brands.php">Brands</a></li>   
                        <li><a href="attributes.php">Attribute</a></li> 
                        <li><a href="#">Coupons</a></li>  
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-map"></i>
                        <span key="t-dashboards">Shipping</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="shipping-country.php">Shipping Countries</a></li> 
                        <li><a href="shipping-state.php">Shipping States</a></li>  
                        <li><a href="shipping-city.php">Shipping Cities</a></li>  
                        <li><a href="shipping-pincode.php">Shipping PIN Code</a></li>  
                        <li><a href="shipping-configuration.php">Shipping Configuration</a></li>  
                        <!-- <li><a href="#">Shipping Charges</a></li>   -->
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shopping-bag"></i>
                        <span key="t-dashboards">Manage Sales</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="orders.php">All Orders</a></li>  
                        <li><a href="#">Inhouse orders</a></li>   
                        <li><a href="#">Seller orders</a></li>  
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-transfer-alt"></i>
                        <span key="t-dashboards">Refunds</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="refunds.php">Refund Requests</a></li>  
                        <li><a href="refund-request.php">Approved Refunds</a></li> 
                        <li><a href="#">Rejected Refunds</a></li>
                        <li><a href="refund-configuration.php">Refund Configuration</a></li>  
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-globe"></i>
                        <span key="t-dashboards">Appearance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="{{route('admin.banners')}}">Home Banner</a></li>  
                        <li><a href="#">Testimonials</a></li> 
                        <li><a href="pages.php">Pages</a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-money"></i>
                        <span key="t-dashboards">Payout</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="payouts.php">All Payouts</a></li>  
                        <li><a href="payout-request.php">Payout Requests</a></li>  
                        <li><a href="commission-configuration.php">Commission Config</a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-file"></i>
                        <span key="t-dashboards">Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="inhouse-product-sale.php">In House Product Sale</a></li>  
                        <li><a href="seller-product-sale.php">Seller Product Sale</a></li>    
                        <li><a href="commission-history.php">Commission History</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-dashboards">Staff</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="staffs.php">All Staff</a></li>  
                        <li><a href="staff-permissions.php">Staff Permissions</a></li>    
                    </ul>
                </li>
                <li>
                    <a href="reviews.php" class="waves-effect">
                        <i class="bx bx-star"></i>
                        <span class="badge rounded-pill bg-danger float-end">3</span>
                        <span key="t-chat">Reviews</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-dashboards">System Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="general-configuration.php">General Settings</a></li>  
                        <li><a href="#">Vat & TAX</a></li>   
                        <li><a href="#">Payment Methods</a></li> 
                        <li><a href="#">Order Configuration</a></li> 
                        <li><a href="#">Login Configuration</a></li>   
                    </ul>
                </li>
                @endif

                @if(Request::is('seller*'))
                @endif

                @if(Request::is('customer*'))
                @endif
            </ul>
        </div> 
    </div>
</div> 