<?php

namespace App\Http\Controllers;

// use App\Models\MyFees;
// use App\Http\Requests\StoreMyFeesRequest;
// use App\Http\Requests\UpdateMyFeesRequest;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\MyFees;
use App\Models\Student;
use App\Models\SchoolProfile;

class MyFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        


        return view('myfees.index',);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function myusd(Request $request)
    {
        $myfee = MyFees::where('AccountLink','=', $request->AccountLink)->where("iCurrencyID","=","1")->get();
        $debit = $myfee->sum('fForeignDebit');
        $credit = $myfee->sum('fForeignCredit');
        $profile = SchoolProfile::all()->first();
        return view('myfees.myusd',compact('myfee','credit','debit','profile'));
    }
    public function myrtgs()
    {
        $myfee = MyFees::where('AccountLink','=','279')->where("iCurrencyID","=","0")->get();
        $debit = $myfee->sum('Debit');
        $credit = $myfee->sum('Credit');

        return view('myfees.myrtgs',compact('myfee','credit','debit'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('myfees.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('myfees.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
