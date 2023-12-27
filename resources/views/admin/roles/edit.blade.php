@extends('layouts.base')

@section('content')

<div class="content">
    <div class="card">
            <div class="card-header">
                <a href="{{ route('roles.index') }}"
                    class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Roles List</a>
            </div>
    </div>
    <div class="card mt-6 p-2 bg-slate-100">
        <h2 class="text-2xl font-semibold">Roles</h2>
            <div class="flex flex-col p-2 bg-slate-100">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-form-label col-lg-3"> Role name </label>
                            <div class="col-lg-9">
                                <div class="d-md-flex">
                                    <div class="flex-grow-1">
                                <input type="text" id="name" name="name" value="{{ $role->name }}"
                                    class="form-control"/>
                                    </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            <div class="btn-group flex-shrink-0 ms-md-3">
                                <button type="submit"
                                class="btn btn-success multiselect-order-options-button">Update</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            
                <h2 class="text-2xl font-semibold">Role Permissions</h2>
                <div class="flex space-x-2 mt-4 p-2">
                
                    @if ($role->permissions)
                        @foreach ($role->permissions as $role_permission)
                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                action="{{ route('roles.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ $role_permission->name }}</button>
                            </form>
                        @endforeach
                    @endif
                    
                
                <div>
                    <form method="POST" action="{{ route('roles.permissions', $role->id) }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="permission"
                                class="col-form-label col-lg-3">Permission</label>
                            <div class="col-lg-9">
                                <div class="d-md-flex">
                                    <div class="flex-grow-1">
                            <select id="permission" name="permission" autocomplete="permission-name"
                                class="form-control multiselect-order-options" >
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                                    </div>
                        @error('name')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                
                <div class="btn-group flex-shrink-0 ms-md-3">
                    <button type="submit"
                        class="btn btn-success multiselect-order-options-button">Assign</button>
                </div>
                                </div>
                            </div>
            </div>
                </form>
            
                </div>
            
        
    </div>
</div>
</div>

@endsection