@extends('layouts.base')

@section('content')
<div class="content">
    
        <div class="card">
            <div class="card-header">
                <a href="{{ route('roles.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">List Roles</a>
            </div>
            <div class="card-body">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Role Name</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control">
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                      <div class="sm:col-span-6 pt-5">
                        <button type="submit" class="btn btn-success my-1 me-2">Create</button>
                      </div>
                    </form>
                  </div>
                  
            </div>

        </div>
        
</div>
@endsection