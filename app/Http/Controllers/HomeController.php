<?php
namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\SubTopic;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function default()
    {
        $subjects = Cache::remember('subjects', 3600, function () {
            return Subject::select('id','title','slug')->get();
        });
        return view('frontend.default', [
            'subjects' => $subjects,
        ]);
    }

    public function home()
    {
        $subjects = Cache::remember('subjects', 3600, function () {
            return Subject::select('id','title','slug')->get();
        });
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

    // public function pageShow($slug, $subtopic)
    // {
    //     $page = Cache::remember('page_' . $slug . '_' . $subtopic, 3600, function () use ($slug, $subtopic) {
    //         return SubTopic::where('slug', $subtopic)->first();
    //     });
    //     return view('frontend.home', [
    //         'page' => $page,
    //     ]);
    // }

}
