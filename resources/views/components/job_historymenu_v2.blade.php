<a href="{{ route('mp_about') }}" class="fixed-bottom-link">職務経歴一覧へ</a>
<h2>職務経歴一覧</h2>

@php
    $companies = [
        ['route' => 'mp_current', 'name' => 'カレント自動車株式会社', 'key' => 'current'],
        ['route' => 'mp_idealump', 'name' => '株式会社アイデアランプ', 'key' => 'idealump'],
        ['route' => 'mp_yourmystar', 'name' => 'ユアマイスター株式会社', 'key' => 'yourmystar'],
        ['route' => 'mp_paltek', 'name' => '株式会社PALTEK', 'key' => 'paltek'],
    ];
@endphp

<div class="job_history_content">
    @foreach ($companies as $company)
        <h3 class="job_history">
            <a href="{{ route($company['route']) }}">
                {{ $company['name'] }}
                <span class="top_year">@include('components.year', ['target' => $company['key']])</span>
            </a>
        </h3>
    @endforeach
</div>
