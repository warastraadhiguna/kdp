<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Company;
use App\Models\GalleryCategory;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        view()->share('company', Company::first());

        view()->share('topBlogs', Blog::orderBy('index')->where('index', ">", "0")->limit(2)->get(), );

        view()->share('shownGalleryCategories', GalleryCategory::orderBy('index')->where('index', ">", "0")->get(), );

        view()->share('shownAbouts', About::orderBy('index')->where('index', ">", "0")->get(), );

        view()->share('shownProjectCategories', ProjectCategory::orderBy('index')->where('index', ">", "0")->get(), );

    }
}
