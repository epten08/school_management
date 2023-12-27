<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use App\Http\Requests\StoreSchoolProfileRequest;
use App\Http\Requests\UpdateSchoolProfileRequest;

class SchoolProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = SchoolProfile::all();

        return view('admin.schoolprofile.index',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (SchoolProfile::all()->first() == null){
            return view('admin.schoolprofile.create');
        } else {
            return view('admin.schoolprofile.create')->with('alert','Only one profile is allowed');
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolProfileRequest $request)
    {
        $image_name = $request->file('logo')->getClientOriginalName();
        $request->file('logo')->storeAs('public/logo/',$image_name);

        $profile = new SchoolProfile();
        $profile->name = request('name');
        $profile->physical_address = request('address');
        $profile->email_address = request('email');
        $profile->phone = request('contact');
        $profile->postal_address = request('address');
        $profile->logo = $image_name;

        $profile->save();

        return redirect()->route('schoolprofile')->with('info','School Profile Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolProfile $schoolProfile)
    {
        $profile = SchoolProfile::all();
        
        return view('admin.schoolprofile.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolProfile $schoolProfile)
    {
        $profile = SchoolProfile::all()->first();

        return view('admin.schoolprofile.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolProfileRequest  $request
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolProfileRequest $request, SchoolProfile $schoolProfile)
    {
        $profile = SchoolProfile::all()-first();
        $profile->name = request('name');
        $profile->physical_address = request('address');
        $profile->email_address = request('email');
        $profile->phone = request('contact');
        $profile->postal_address = request('address');
        
        if (request('logo') != null) {
            $name = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('public/logo/',$name);
            $profile->logo = $name;
        }
        
        $profile->save();
        return redirect('schoolprofile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolProfile $schoolProfile)
    {
        //
    }
}
