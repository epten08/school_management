@extends('layouts.base')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-header">
            <div class="flex p-2">
                <a href="{{ route('users.index') }}"
                    class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Users List</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="flex flex-col p-2 bg-slate-100">
                <div>First Name: {{ $user->firstname }}</div>
                <div>Last Name: {{ $user->lastname }}</div>
                <div>User Email: {{ $user->email }}</div>
            </div>
        </div>
    </div>
            <div class="card mt-6 p-2 bg-slate-100">
                <h2 class="text-2xl font-semibold">Roles</h2>
                <div class="flex flex-col p-2 bg-slate-100">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    @if ($user->roles)
                        @foreach ($user->roles as $user_role)
                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                action="{{ route('users.roles.remove', [$user->id, $user_role->id]) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-warning multiselect-order-options-button" type="submit">{{ $user_role->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div class="max-w-xl mt-6">
                    <form method="POST" action="{{ route('users.roles', $user->id) }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                            <div class="col-lg-9">
                                <div class="d-md-flex">
                                    <div class="flex-grow-1">
                            <select id="role" name="role" autocomplete="role-name"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                                    </div>
                        
                        @error('role')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                </div>
                            </div>
            </div>
                </form>
            </div>
            </div>
        </div>
            <div class="card mt-6 p-2 bg-slate-100">
                <h2 class="text-2xl font-semibold">Permissions</h2>
                <div class="flex flex-col p-2 bg-slate-100">
                <div class="flex space-x-2 mt-4 p-2">
                    @if ($user->permissions)
                        @foreach ($user->permissions as $user_permission)
                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                action="{{ route('users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ $user_permission->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div class="max-w-xl mt-6">
                    <form method="POST" action="{{ route('users.permissions', $user->id) }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="permission"
                                class="block text-sm font-medium text-gray-700">Permission</label>
                            <select id="permission" name="permission" autocomplete="permission-name"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('name')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                </div>
                </form>
            </div>
            </div>
        

    
</div>
</div>
@endsection