<?php

namespace App\Providers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        \View::composer('*', function ($view) {
            $categories = \Cache::remember('poular_categorys',1, function () {
                return $categories = Category::withCount('articles')
                    ->orderBy('articles_count','desc')
                    ->limit(10)
                    ->get();
            });
            $view->with('popular_categories', $categories);
        });

        Carbon::setLocale('zh');
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
