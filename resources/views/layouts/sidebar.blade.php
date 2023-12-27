<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- Sidebar header -->
    <div class="sidebar-section">
        <div class="sidebar-section-body d-flex justify-content-center">
            <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

            <div>
                <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>

                <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- /sidebar header -->


    <!-- Main navigation -->
    <div class="sidebar-section">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header pt-0">
                <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                <i class="ph-dots-three sidebar-resize-show"></i>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link">
                    <i class="ph-layout"></i>
                    <span>System Administration</span>
                </a>
                <ul class="nav-group-sub collapse">
                    <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="{{route('roles.index')}}" class="nav-link">Roles</a></li>
                    <li class="nav-item"><a href="{{route('permissions.index')}}" class="nav-link">Permissions</a></li>
                    <li class="nav-item"><a href="{{route('schoolprofile')}}" class="nav-link">Organisation Profile</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('studentdashboard')}}" class="nav-link">
                    <i class="ph-house"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('myfees')}}" class="nav-link ">
                    <i class="ph-money"></i>
                    <span>
                        Fees
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('editStudentProfile', Auth::user()->id)}}" class="nav-link ">
                    <i class="ph-money"></i>
                    <span>
                        Profile
                    </span>
                </a>
            </li>
           
        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->

</div>
<!-- /main sidebar -->