<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolProfile;
use App\Models\MyFees;
use App\Models\Student;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class FormController extends Controller
{
    public function printLetterHead(Request $request){
        $profile = SchoolProfile::all()->first();
        $summaryData = array(
            'profile' => $profile
        );
        $pdf = PDF::loadView('admin.forms.letterhead',$summaryData);
        $filename = "Letter Head";
        return $pdf->stream($filename . ".pdf", array('Attachment'=> 0));

    }

    public function printStatement(Request $request){
        $profile = SchoolProfile::all()->first();
        $user = Auth::user();
        $student = Student::where("DCLink","=",$user->DCLink)->first();
        $fees = MyFees::where("AccountLink","=",$user->DCLink)->get();
        $summaryData = array(
            'profile' => $profile,
            'user' => $user,
            'student' => $student,
            'fees'=> $fees
        );
        $pdf = PDF::loadView('admin.forms.usdstatement',$summaryData)->setOptions(['defaultFont' => 'sans-serif']);
        $filename = "Statement";
        return $pdf->stream($filename . ".pdf", array('Attachment'=> 0));
        
    }
}
