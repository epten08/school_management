<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    
    public function index()
        {
            $roles = Role::whereNotIn('name', ['admin'])->get();
            return view('admin.roles.index',compact('roles'));
        }

    public function create()
        {

            return view('admin.roles.create');
        }

    public function store(Request $request){
        $validated = $request->validate(['name'=> ['required','min:3']]);
        Role::create($validated);

        return redirect()->route('roles.index')->with('message','Role Created successfully');
    }

    public function edit(Role $role){

        $permissions = Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

    public function update(Request $request,Role $role){
        $validated = $request->validate(['name'=>['required','min:3']]);
        $role->update($validated);

        return redirect()->route('roles.index')->with('message','Role Updated successfully.');
    }

    public function givePermission(Request $request, Role $role){
        if($role->hasPermissionTo($request->permission)){
            return back()->with('message','Permission Exists');
        }

        $role->givePermissionTo($request->permission);
        return back()->with('message','Permission added.');
    }

    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermission($permission);
            return back()->with('message',"Permission revoked.");
        }
        return back()->with('message','Permission does not exist.');
    }

    
}