<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Subject;
use App\Models\SubTopic;

class ShowSubjectProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('frontend.sidebar.sidebar', function ($view) {

    $slug = request()->route('slug');

    $subject = null; 
    if ($slug) {

        $subjectData = Subject::where('slug', $slug)
            ->with('topics')
            ->first();

        if ($subjectData) {
            $topicIds = $subjectData->topics->pluck('id');

            $subject = [
                'subjects' => $subjectData,
                'subtopics' => SubTopic::whereIn('topic_id', $topicIds)->get()
            ];
        }
    }
    // dd($subject);
    $view->with('subjects', $subject);
});

    }
}
