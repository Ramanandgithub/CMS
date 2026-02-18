<?php
namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\SubTopic;

class HomeController extends Controller
{
    public function default()
    {
        $subjects = Subject::all();
        return view('frontend.default', [
            'subjects' => $subjects,
        ]);
    }

    public function home()
    {
        $subjects = Subject::all();
        return view('frontend.home', [
            'subjects' => $subjects,
        ]);
    }

    public function subtopicShow($slug, $id)
    {
        $subtopics = SubTopic::where('topic_id', $id)
            ->get();

        return view('frontend.sidebar.sidebar', [
            'subtopics' =>  $subtopics,
        ]);
    }

}
