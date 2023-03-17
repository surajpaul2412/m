<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!--[ Logo ] start --> 
            <div class="navbar-brand-box">
                <a href="./" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('backend/admin/images/logo.svg')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('backend/admin/images/logo-dark.png')}}" alt="" height="32">
                    </span>
                </a>

                <a href="./" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('backend/admin/images/logo-light.svg')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('backend/admin/images/logo-light.png')}}" alt="" height="32">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('backend/admin/images/users/avatar-1.jpg')}}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    @if(Auth::user()->role_id == 1)
                        <a class="dropdown-item" href="admin"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    @else
                        <a class="dropdown-item" href="seller"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    @endif
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>