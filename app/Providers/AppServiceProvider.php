<?php
namespace App\Providers;

use App\Models\Subject;
use App\Models\SubTopic;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Subjects for layout + topbar
View::composer(['frontend.default', 'frontend.topbar.index'], function ($view) {
    $view->with('subjects', Subject::all());
});

// Sidebar composer
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
