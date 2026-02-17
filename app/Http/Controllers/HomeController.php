<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class HomeController extends Controller
{  
    public function home()
    {
        $subjects = Subject::all();
        // dd($subjects);
        return view('frontend.home',[
            'subjects' => $subjects
        ]);
    }

    // public function showSubjects(){
    //     $subjects = Subject::with('topics')->get();
    //     return view('frontend.topbar.index', compact('subjects'));
    // }
}
