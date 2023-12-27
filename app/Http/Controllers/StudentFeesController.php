<?php

namespace App\Http\Controllers;

use App\Models\StudentFees;
use App\Http\Requests\StoreStudentFeesRequest;
use App\Http\Requests\UpdateStudentFeesRequest;

class StudentFeesController extends Controller
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
     * @param  \App\Http\Requests\StoreStudentFeesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentFeesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function show(StudentFees $studentFees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentFees $studentFees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentFeesRequest  $request
     * @param  \App\Models\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentFeesRequest $request, StudentFees $studentFees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentFees $studentFees)
    {
        //
    }
}
