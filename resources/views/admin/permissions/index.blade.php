@extends('layouts.base')

@section('content')

<div class="content">
    <div class="card">
        
        <div class="card-header">
                <a href="{{ route('permissions.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create permissions</a>
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
                            @foreach ($permissions as $permission)
                            <tr>
                            <td>
                                {{ $permission->name }}
                            </td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                     <a type="button" href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary my-1 me-2">Edit</a>
                                     <form 
                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" 
                                        method="POST" 
                                        action="{{ route('permissions.destroy', $permission->id) }}" 
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


{{-- <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex justify-end p-2">
                <a href="{{ route('permissions.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create Permission</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($permissions as $permission)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{ $permission->name }}
                            </div>
                            </td>
                            <td>
                               <div class="flex justify-end">
                                   <div class="flex space-x-2">
                                    <a href="{{ route('permissions.edit', $permission->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST" action="{{ route('permissions.destroy', $permission->id) }}" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                     </form>                                       </div>
                               </div>
                            </td>
                        </tr>  
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection