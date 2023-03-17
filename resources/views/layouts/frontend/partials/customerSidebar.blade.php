<!-- [ user account navigation] start  -->
<ul id="changeActive" class="nav flex-column bg-light h-100 dashboard-list d-none d-lg-block">
    <li><a class="nav-link active"  href="my-orders.php">My Orders</a></li>
    <!-- <li><a class="nav-link" data-bs-toggle="tab" href="#orderstracking">Orders tracking</a></li>-->
    <li><a class="nav-link"  href="address.php">Address</a></li>
    <li><a class="nav-link"  href="profile-info.php">Profile info</a></li>
    <li><a class="nav-link"  href="wishlist.php">Wishlist</a></li>
    <li>
    	<a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">logout</a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       	@csrf
       </form>
    </li>
</ul>
<!-- [ user account navigation] end  -->