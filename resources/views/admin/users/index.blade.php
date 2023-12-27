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
                <h5 class="mb-0">Users List</h5>
            </div>
        </div>
        <div class="card">
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-center">     
                            <div class="d-inline-flex">
                                <a type="button" href="{{ route('users.show', $user->id) }}" class="btn btn-primary my-1 me-2">Edit</a>
                                <form
                                class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                method="POST"
                                action="{{ route('users.destroy', $user->id) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger my-1 me-2">Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                 
                </tbody>
            </table>
        </div>
        <!-- /basic datatable -->


    </div>
    <!-- /content area -->


</div>

@endsection