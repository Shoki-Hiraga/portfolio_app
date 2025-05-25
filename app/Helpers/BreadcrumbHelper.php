<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class BreadcrumbHelper
{
    public static function generate(): array
    {
        $routeName = Route::currentRouteName();

        // 各ルートごとにパンくずを定義
        $breadcrumbs = [
            'mp_paltek' => [
                ['name' => '株式会社PALTEK', 'url' => route('mp_paltek')],
            ],
            'mp_yourmystar' => [
                ['name' => 'ユアマイスター株式会社', 'url' => route('mp_yourmystar')],
            ],
            'mp_idealump' => [
                ['name' => '株式会社アイデアランプ', 'url' => route('mp_idealump')],
            ],
            'mp_current' => [
                ['name' => 'カレント自動車株式会社', 'url' => route('mp_current')],
            ],
            // ↓ パンくずにカレント自動車を表示したい
            'mp_result' => [
                ['name' => 'カレント自動車株式会社', 'url' => route('mp_current')],
                ['name' => 'カレント自動車_SEO実績', 'url' => route('mp_result')],
            ],
            'mp_result_all' => [
                ['name' => 'カレント自動車株式会社', 'url' => route('mp_current')],
                ['name' => 'カレント自動車_SEO実績', 'url' => route('mp_result')],
                ['name' => 'カレント自動車_SEO実績_ALL', 'url' => route('mp_result_all')],
            ],
            'mp_about' => [
                ['name' => 'About', 'url' => route('mp_about')],
            ],
            'form' => [
                ['name' => 'お問い合わせ', 'url' => route('form')],
            ],
        ];

        return $breadcrumbs[$routeName] ?? [];
    }
}
