@extends('layouts.base')

@section('content')

<div class="content-inner">
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            
        </div>
    </div>
    
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Update Organisation</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Update Organization</strong>
                <small>Details</small>
            </div>
            <form method="POST" action="{{route('schoolprofile.store',$profile->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" class="control-label">Name</label>
                                    <input type="text" class="form-control"  name='name' value="{{$profile->name}}">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" class="form-control"  name='email' value="{{$profile->email_address}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label">Phone No.</label>
                            <div class="form-group">
                                <input type="text" name="contact" class="form-control form-control-sm" required="" value="{{$profile->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Address</label>
                                <textarea id="" cols="30" rows="4" name="address" class="form-control" value="{{$profile->physical_address}}"></textarea>
                            </div>
                            <div class="form-group">
                                
                                <label for="" class="control-label">Input Organization Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="logo" accept="image/*" onchange="displayImgProfile(this,$(this))">
                                    <label class="btn btn-sm btn-primary" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center rounded-circle">
                                <img src="" alt="" id="profile" class="img-fluid img-thumbnail rounded-circle" style="max-width: calc(20%)">
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-block btn-success col-sm-5 align-self-center"><b>Save</b></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection