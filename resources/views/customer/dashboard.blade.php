@extends('layouts.frontend.customerapp')

@section('title')
<title>My Account | {{env('APP_NAME')}}</title>
@endsection

@section('css')
@endsection

@section('content')
<div id="page-content">
    <!-- [ Breadcrumbs ] start -->
    <div class="breadcrumbs-wrapper text-uppercase">
        <div class="container">
            <div class="breadcrumbs">
            <a href="index.php" title="Back to the home page">Home</a><span>|</span>
                <a href="#">Dashboard</a><span>|</span>
                <span class="fw-bold">My Orders</span>
            </div>
        </div>
    </div> 
    
    <!-- [ Main Content ] start -->
    <section class="my-account-main">
        <div class="container pt-2">
            <!--Dashboard Content-->
            <div class="dashboard-upper-info">
                <div class="row align-items-center g-0">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="d-single-info">
                            <p class="user-name">Hello <span class="fw-600">Ajay Kumar</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="d-single-info">
                            <p>Need Assistance? Customer service at.</p>
                            <p><a href="mailto:admin@example.com">admin@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="d-single-info">
                            <p>E-mail them at </p>
                            <p><a href="mailto:support@example.com">support@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6">
                        <div class="d-single-info text-lg-center">
                            <a class="link-underline fw-600 view-cart" href="cart-style1.html"><i class="icon an an-sq-bag me-2"></i>View Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 mb-lg-5 pb-lg-5">
                <div class="col-xl-3 col-lg-2 col-md-12 mb-4 mb-lg-0">
                    <!-- Nav tabs -->
                    @include('layouts.frontend.partials.customerSidebar')
                    <!-- End Nav tabs -->
                </div>

                <div class="col-xl-9 col-lg-10 col-md-12">
                    <div class="dashboard-content">

                        <!-- Orders -->
                        <div class="product-order">
                            <h3>Orders</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="list-group order-listing p-0">

                                        <li class="list-group-item order-item border p-0 mb-3"> 
                                            <div class="order-box card m-0">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <img src="assets/images/order-icon.jpg" class="img-fluid rounded-circle shadow" width="40px">
                                                            <div class="media-body ms-2">
                                                                <h6 class="mb-0 ft-medium">#1250004123</h6>
                                                                <p class="m-0 fs-sm ft-normal">Total Amount - <b>₹</b>655.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="delv_status"><span class="ft-medium small text-warning bg-white rounded px-2 py-1 border">In Progress</span></div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text m-0">2 Items</p>
                                                    <p class="m-0"><small><b>Order Placed on:</b> 15 Oct, 2022</small></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="more-links text-end">
                                                        <a href="view-order.php"><small>View Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="track-order.php"><small>Track Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="return-order.php"><small>Return Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="#"><small>Cancel Order</small></a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>

                                        <li class="list-group-item order-item border p-0 mb-3"> 
                                            <div class="order-box card m-0">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <img src="assets/images/order-icon.jpg" class="img-fluid rounded-circle shadow" width="40px">
                                                            <div class="media-body ms-2">
                                                                <h6 class="mb-0 ft-medium">#1250004123</h6>
                                                                <p class="m-0 fs-sm ft-normal">Total Amount - <b>₹</b>655.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="delv_status"><span class="ft-medium small text-success bg-white rounded px-2 py-1 border">Completed</span></div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text m-0">2 Items</p>
                                                    <p class="m-0"><small><b>Order Placed on:</b> 15 Oct, 2022</small></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="more-links text-end">
                                                        <a href="view-order.php"><small>View Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="track-order.php"><small>Track Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="return-order.php"><small>Return Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="#"><small>Cancel Order</small></a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>

                                        <li class="list-group-item order-item border p-0 mb-3"> 
                                            <div class="order-box card m-0">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <img src="assets/images/order-icon.jpg" class="img-fluid rounded-circle shadow" width="40px">
                                                            <div class="media-body ms-2">
                                                                <h6 class="mb-0 ft-medium">#1250004123</h6>
                                                                <p class="m-0 fs-sm ft-normal">Total Amount - <b>₹</b>655.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="delv_status"><span class="ft-medium small text-danger bg-white rounded px-2 py-1 border">Cancel</span></div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text m-0">2 Items</p>
                                                    <p class="m-0"><small><b>Order Placed on:</b> 15 Oct, 2022</small></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="more-links text-end">
                                                        <a href="view-order.php"><small>View Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="track-order.php"><small>Track Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="return-order.php"><small>Return Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="#"><small>Cancel Order</small></a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>

                                        <li class="list-group-item order-item border p-0 mb-3"> 
                                            <div class="order-box card m-0">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <img src="assets/images/order-icon.jpg" class="img-fluid rounded-circle shadow" width="40px">
                                                            <div class="media-body ms-2">
                                                                <h6 class="mb-0 ft-medium">#1250004123</h6>
                                                                <p class="m-0 fs-sm ft-normal">Total Amount - <b>₹</b>655.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="delv_status"><span class="ft-medium small text-danger bg-white rounded px-2 py-1 border">Cancel</span></div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text m-0">2 Items</p>
                                                    <p class="m-0"><small><b>Order Placed on:</b> 15 Oct, 2022</small></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="more-links text-end">
                                                        <a href="view-order.php"><small>View Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="track-order.php"><small>Track Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="return-order.php"><small>Return Order</small></a>
                                                        <span class="px-1">|</span>
                                                        <a href="#"><small>Cancel Order</small></a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="row justify-content-center align-items-center text-center">
                                <div class="col-6 mt-4">
                                    <div id="loadOrder" class="btn btn-success btn-sm remain_products rounded"> Load More</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Tab panes -->
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </section> 

</div> 
@endsection