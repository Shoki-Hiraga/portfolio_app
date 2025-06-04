<details class="gnav-accordion">
    <summary class="gnav-title">職務経歴一覧：2025/6/05 更新</summary>
    <div class="gnav-list">
        @php
            $companies = [
                ['route' => 'mp_current', 'name' => 'カレント自動車株式会社', 'key' => 'current'],
                ['route' => 'mp_idealump', 'name' => '株式会社アイデアランプ', 'key' => 'idealump'],
                ['route' => 'mp_yourmystar', 'name' => 'ユアマイスター株式会社', 'key' => 'yourmystar'],
                ['route' => 'mp_paltek', 'name' => '株式会社PALTEK', 'key' => 'paltek'],
            ];
        @endphp

        @foreach ($companies as $company)
            <h3 class="header_job_history">
                <a href="{{ route($company['route']) }}">
                    {{ $company['name'] }}
                    <span class="top_year">@include('components.year', ['target' => $company['key']])</span>
                </a>
            </h3>
        @endforeach
    </div>
</details>
