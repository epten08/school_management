<?php

namespace App\Http\Controllers;

use App\Models\StudentParent;
use App\Http\Requests\StoreStudentParentRequest;
use App\Http\Requests\UpdateStudentParentRequest;

class StudentParentController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentParentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentParentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentParent  $studentParent
     * @return \Illuminate\Http\Response
     */
    public function show(StudentParent $studentParent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentParent  $studentParent
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentParent $studentParent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentParentRequest  $request
     * @param  \App\Models\StudentParent  $studentParent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentParentRequest $request, StudentParent $studentParent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentParent  $studentParent
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentParent $studentParent)
    {
        //
    }
}
