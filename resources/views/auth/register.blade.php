@extends('layouts.index')

@section('content')

<div class="content d-flex justify-content-center align-items-center">

    <!-- Registration form -->
    <form class="login-form" action="{{ route('storeStudent') }}" method="POST">
        @csrf
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                        <img src="../../../assets/images/logo_icon.svg" class="h-48px" alt="">
                    </div>
                    <h5 class="mb-0">Create account</h5>
                    <span class="d-block text-muted">All fields are required</span>
                </div>
                <div class="mb-3" hidden>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" placeholder="Marist" name="studentnumber" value="{{ $num->Account }}">
                        <div class="form-control-feedback-icon">
                            <i class="ph-user-circle text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-3" hidden>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" placeholder="Marist" name="dclink" value="{{ $num->DCLink }}">
                        <div class="form-control-feedback-icon">
                            <i class="ph-user-circle text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="text-center text-muted content-divider mb-3">
                    <span class="px-2">Your credentials</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Firstname</label>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" placeholder="Marist" name="firstname">
                        <div class="form-control-feedback-icon">
                            <i class="ph-user-circle text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lastname</label>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" placeholder="Brothers" name="lastname">
                        <div class="form-control-feedback-icon">
                            <i class="ph-user-circle text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="password" name="password" class="form-control" placeholder="•••••••••••">
                        <div class="form-control-feedback-icon">
                            <i class="ph-lock text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Repeat Password</label>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="password" class="form-control" placeholder="•••••••••••">
                        <div class="form-control-feedback-icon">
                            <i class="ph-lock text-muted"></i>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-teal w-100">Register</button>
            </div>
        </div>
    </form>
    <!-- /registration form -->

</div>
@endsection
