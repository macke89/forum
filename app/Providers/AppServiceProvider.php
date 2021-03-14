<?php

    namespace App\Providers;

    use App\Models\Post;
    use App\Models\Report;
    use App\Models\Thread;
    use App\Models\User;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            //
        }

        /**
         *
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            if (config('app.env') === 'production') {
                \URL::forceScheme('https');
            }

            View::share('threads', Thread::all());
            View::share('mostRecentThreads', Thread::latest()->take(5)->get());
            View::share('mostPopularThreads', Thread::with('posts')->get()->sortByDesc(function ($query) {
                return $query->posts->count();
            })->take(5));
            View::share('posts', Post::all());
            View::share('users', User::all());
            View::share('reports', Report::all());
        }
    }
