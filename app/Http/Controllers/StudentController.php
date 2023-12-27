<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;


// to create a user
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function StudentNum()
    {
        return view('auth.studentnumber');
    }


    public function getStudentNum(Request $request)
    {
        $num = Student::where('Account',"=",$request->stdnum)->first();
        if(is_null($num)){
            return redirect()->back()->with('Error',"Student Number does not exist");
        }
        else {
            return view('auth.register',compact('num'));
        }
        return view('auth.register',compact('num'));
    }
    

    public function create()
    {
        //
    }
    

    public function store(Request $request)
    {
        $user_pass = Hash::make($request->password);
        $student = new User();
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->password = $user_pass;
        $student->email = Str::lower($request->input('studentnumber')."@marist.ac.zw");
        $student->DCLink = $request->input('dclink');
        
        $student->save();

        $student->assignRole("student");

        Auth::login($student);

        return view('profile.add', compact('student'));
    }
    

    public function show(Student $student)
    {
        //
    }
    
    
    function addprofile(Request $request, Student $student)
    {
        //
        $student = Student::find($student);
        return view('profile.update', compact('student'));
    }


    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }
    

    public function destroy(Student $student)
    {
        //
    }
}
