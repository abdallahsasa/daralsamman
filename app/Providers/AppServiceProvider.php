<?php

namespace App\Providers;

use App\Models\Product\Category;
use Illuminate\Support\Facades\View;


use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application solutions.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application solutions.
     */
    public function boot(): void
    {
        $activeCategories = Category::where('status', 'active')->orderBy('name', 'asc')->get();

        $MenuCategories = $activeCategories;
        $footerCategories = $activeCategories->random(4);


        // Share the $category object with all views
        View::share(compact('MenuCategories','footerCategories'));
        Paginator::useBootstrapFive();
       // Paginator::useBootstrapFour();
    }
}
