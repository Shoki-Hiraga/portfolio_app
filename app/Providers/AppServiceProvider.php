<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        $companies_year = [
            'paltek' => ['start' => '2015/03', 'end' => '2020/03'],
            'yourmystar' => ['start' => '2020/04', 'end' => '2021/03'],
            'idealump' => ['start' => '2021/04', 'end' => '2023/03'],
            'current' => ['start' => '2023/04', 'end' => '現在']
        ];
    
        View::share('companies_year', $companies_year);
    }
    
}
