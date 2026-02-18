<?php
namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function showSubjects()
    {
        $subjects = Subject::with('topics')->get();
        return view('frontend.topbar.index', compact('subjects'));
    }
}
