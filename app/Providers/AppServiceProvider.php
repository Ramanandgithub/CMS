<?php
namespace App\Providers;

use App\Models\Subject;
use App\Models\SubTopic;
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
        view()->composer('frontend.sidebar.sidebar', function ($view) {

            $slug = request()->route('slug');

            if ($slug) {

                $subject['subjects'] = Subject::where('slug', $slug)
                    ->with('topics')
                    ->firstOrFail();

                $topicIds = $subject['subjects']->topics->pluck('id');

                $subject['subtopics'] = SubTopic::whereIn('topic_id', $topicIds)->get();
                // foreach ($subject['subtopics'] as $topic) {
                //     dd($topic->slug);
                // }
            }
            // dd($subject);
            
            $view->with('subject', $subject);
        });
    }

}
