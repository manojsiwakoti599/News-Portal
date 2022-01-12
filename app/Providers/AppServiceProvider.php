<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\District;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('categories', Category::with('subcategories')->get());
        View::share('districts', District::with('subdistricts')->get());
        View::share('social', DB::table('socials')->first());
        View::share('headline', DB::table('posts')->where('posts.headline', 1)->limit(3)->get());
        View::share('notice', DB::table('notices')->first());



    }
}
