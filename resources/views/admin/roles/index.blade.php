@extends('layouts.base')

@section('content')
<div class="content">
    <div class="card">
        
        <div class="card-header">
                <a href="{{ route('roles.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create Role</a>
            </div>
        </div>
        <div class="card">
                    <table class="table datatable-basic">
                    <thead>
                        <tr>
                           <th>Name</th>
                           <th class="text-center">Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                     <a type="button" href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary my-1 me-2">Edit</a>
                                     <form 
                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" 
                                        method="POST" 
                                        action="{{ route('roles.destroy', $role->id) }}" 
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

    </div>
</div>

@endsection