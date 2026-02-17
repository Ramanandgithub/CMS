<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function showSubjects(){
        $subjects = Subject::with('topics')->get();
        dd($subjects);
        return view('frontend.topbar.index', compact('subjects'));
    }
}   
   