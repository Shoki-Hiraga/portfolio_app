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
