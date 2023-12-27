<?php

namespace App\Http\Controllers;

use App\Models\StudentProfile;
use App\Http\Requests\StoreStudentProfileRequest;
use App\Http\Requests\UpdateStudentProfileRequest;
use Auth;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student_profile = StudentProfile::where('user_id','=', Auth::user()->id)->get();
        return view('profile.index', compact('student_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $student = Auth::user();
        return view('profile.add', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentProfileRequest $request)
    {
        //
        $student_profile = new StudentProfile();
        $student_profile->gender = $request->input('gender');
        $student_profile->phone_number = $request->input('phonenumber');
        $student_profile->first_name = $request->input('firstname');
        $student_profile->last_name = $request->input('lastname');
        $student_profile->othernames = $request->input('othernames');
        $student_profile->IdNo = $request->input('IdNo');
        $student_profile->user_id = $request->input('user_id');
        $student_profile->parent_id = $request->input('parent_id');
        
        $student_profile->save();

        return view('profile.index', compact('student_profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function show(StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentProfile $studentProfile)
    {
        //
        $student = StudentProfile::where('user_id', '=', Auth::user()->id)->first();
        return view('profile.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentProfileRequest  $request
     * @param  \App\Models\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentProfileRequest $request, StudentProfile $studentProfile)
    {
        //
        $student_profile = StudentProfile::where('user_id', '=', Auth::user()->id)->first();
        $student_profile->update([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'othernames' => $request->othernames,
            'IdNo' => $request->IdNo,
            'user_id' => $request->user_id,
            'phone_number' => $request->phonenumber,
            'parent_id' => $request->parent_id,

        ]);
        // // dd($request->all());
        // $student_profile->update(["first_name" => $request->firstname]);

        return redirect()->route('studentProfile')->with('success', 'Profile Updated Successfully.');
        // return view('profile.index', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentProfile $studentProfile)
    {
        //
    }
}
