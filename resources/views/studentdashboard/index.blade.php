@extends('layouts.base')

@section('content')
    <!-- Inner content -->
			<div class="content-inner">



<!-- Content area -->
<div class="content">


    <!-- Dashboard content -->
    <div class="row">
        <div class="col-xl-8">

            

            <!-- Quick stats boxes -->
            <div class="row">
                <div class="col-lg-4">

                    <!-- Members online -->
                    <div class="card bg-teal text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="mb-0">3,450</h3>
                                <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+53,6%</span>
                            </div>
                            
                            <div>
                                Members online
                                <div class="fs-sm opacity-75">489 avg</div>
                            </div>
                        </div>

                        <div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
                    </div>
                    <!-- /members online -->

                </div>

               

                <div class="col-lg-4">

                    <!-- Today's revenue -->
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">$18,390</h3>
                                <div class="ms-auto">
                                    <a class="text-white" data-card-action="reload">
                                        <i class="ph-arrows-clockwise"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div>
                                Today's revenue
                                <div class="fs-sm opacity-75">$37,578 avg</div>
                            </div>
                        </div>

                        <div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
                    </div>
                    <!-- /today's revenue -->

                </div>
            </div>
            <!-- /quick stats boxes -->

        </div>

        <div class="col-xl-4">

       

        </div>
    </div>
    <!-- /dashboard content -->

</div>
<!-- /content area -->


<!-- Footer -->
<div class="navbar navbar-sm navbar-footer border-top">
    <div class="container-fluid">
        <span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>

        <ul class="nav">
            <li class="nav-item">
                <a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="ph-lifebuoy"></i>
                        <span class="d-none d-md-inline-block ms-2">Support</span>
                    </div>
                </a>
            </li>
            <li class="nav-item ms-md-1">
                <a href="https://demo.interface.club/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="ph-file-text"></i>
                        <span class="d-none d-md-inline-block ms-2">Docs</span>
                    </div>
                </a>
            </li>
            <li class="nav-item ms-md-1">
                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="ph-shopping-cart"></i>
                        <span class="d-none d-md-inline-block ms-2">Purchase</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /footer -->

</div>
<!-- /inner content -->
@endsection
