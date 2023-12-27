@extends('layouts.base')

@section('content')

<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">     
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Basic datatable -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Organisation Information</h5>
                <div class="pull-right">
                   
                    <a href="{{route('schoolprofile.create')}}"  class="btn btn-sm btn-primary" title="Add Data">
                        <i class="fa fa-plus-circle"></i> Add Data
                    </a>
                </div>
                
            </div>
        </div>
        <div class="card">
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th>Organisation</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profile as $profile)
                    <tr>
                        <td> {{$profile->name}}</td>
                        <td> {{$profile->physical_address}}</td>
                        <td> {{$profile->phone}}</td>
                        <td> {{$profile->email_address}}</td>
                        <td class="text-center">     
                            <div class="d-inline-flex">
                                <a type="button" href="{{ route('schoolprofile.edit', $profile->id) }}" class="btn btn-primary my-1 me-2">Edit</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection