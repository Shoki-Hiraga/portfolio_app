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
    
        $projects = [
            '332blog' => [
                'name' => '332blog',
                'url' => 'https://332blog.com/'
            ],
            'shisaly' => [
                'name' => 'shisaly',
                'url' => 'https://shisaly.com/'
            ],
            'rabostar' => [
                'name' => 'ラボスター',
                'url' => 'https://rabostar.com/'
            ],
            'carprice' => [
                'name' => '中古車買取相場データベース',
                'url' => 'https://carprice-info.332web.com/'
            ],
            'portfolio' => [
                'name' => 'my portfolio app',
                'url' => 'https://my-portfolio.332web.com/'
            ],
            'qsha_oh' => [
                'name' => '旧車王',
                'url' => 'https://www.qsha-oh.com/'
            ]
        ];
    
        View::share([
            'companies_year' => $companies_year,
            'projects' => $projects
        ]);
    }
    
}
