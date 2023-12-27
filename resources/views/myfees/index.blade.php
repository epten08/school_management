@extends('layouts.base')
@section('content')

 <!-- Inner content -->
 <div class="content-inner">


<!-- Content area -->
<div class="content">

    <!-- Invoice template -->
    <div class="card">

        <div class="card-body ">
        <a href="{{route('myusd')}}" class="btn btn-primary rounded-pill m-20 px-20" onclick="event.preventDefault();
        document.getElementById('myusd-form').submit();">USD STATEMENT</a>
        {{-- form to query the fees USD --}}
        <form action="{{route('myusd')}}" method="POST" id="myusd-form" hidden>
            @csrf
            <input type="text" name="AccountLink" value="{{ Auth::user()->DCLink }}">
        </form>

        {{-- form to query the fees RTGS --}}
        <a href="{{route('myrtgs')}}" class="btn btn-primary rounded-pill m-20" onclick="event.preventDefault();
        document.getElementById('myrtgs-form').submit();">RTGS STATEMENT</a>
        <form action="{{route('myrtgs')}}" method="POST" id="myrtgs-form" hidden>
            @csrf
            <input type="text" name="AccountLink" value="{{ Auth::user()->DCLink }}">
        </form>

        </div>

    

  
    </div>
    <!-- /invoice template -->

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