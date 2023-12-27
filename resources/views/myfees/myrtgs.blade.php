@extends('layouts.base')
@section('content')
 <!-- Inner content -->
 <div class="content-inner">


<!-- Content area -->
<div class="content">

    <!-- Invoice template -->
    <div class="card">
        <div class="card-header d-flex align-items-center py-0">
            <h5 class="py-3 mb-0">Fees Statement</h5>
            <div class="d-inline-flex ms-auto">
                <button type="button" class="btn btn-light"><i class="ph-file-arrow-down me-2"></i> Save</button>
                <button type="button" class="btn btn-light ms-3"><i class="ph-printer me-2"></i> Print</button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center mt-2 mb-3">
                            <img src="../../../assets/images/logo_icon.svg" class="h-24px" alt="">
                            <h4 class="d-none d-sm-inline-block text-body mb-0 ms-2">Limitless</h4>
                        </div>

                         <ul class="list list-unstyled mt-2 mb-0">
                            <li>2269 Elba Lane</li>
                            <li>Paris, France</li>
                            <li>888-555-2311</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="text-sm-end mb-4">
                        <h4 class="text-primary mb-2 mt-lg-2">Fees Statement RTGS</h4>
                        <ul class="list list-unstyled mb-0">
                            <li>Date Generated: <span class="fw-semibold">January 12, 2015</span></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="table-responsive">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Ref Number</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($myfee as $myfee)
                    <tr>
                        <td>
                            {{$myfee['TxDate']}}
                        </td>
                        <td>{{$myfee['Description']}}</td>
                        <td>{{$myfee['Reference']}}</td>
                        @if ($myfee['Debit'] == 0)
                        <td> </td>
                        @else
                        <td>{{$myfee['Debit']}}</td>
                        @endif
                        @if ($myfee['Credit'] == 0)
                        <td> </td>
                        @else
                        <td>{{$myfee['Credit']}}</td>
                        @endif
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-body border-top">
            <div class="d-lg-flex flex-lg-wrap">
                <div class="pt-2 mb-3">
                   
                </div>

                <div class="pt-2 mb-3 wmin-lg-400 ms-auto">
                  
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr>
                                    <th>Current Balance ZWL:</th>
                                    @if($debit > $credit)
                                    <td class="text-end text-danger"><h5 class="fw-semibold">{{$debit - $credit}}</h5></td>
                                    @else
                                    <td class="text-end text-success"><h5 class="fw-semibold">{{$debit - $credit}}</h5></td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-primary">
                            Send invoice
                            <i class="ph-paper-plane-tilt ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</span>
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
