<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')
@include('components.link')

<title>{{ $python_title }}</title>
</head>
<body>
    <h1>{{$python_h1}}</h1>
    <h2>職務経歴</h2>
    <div class="history">
        <h3 class="history">
            <a href="{{ route('mp_paltek') }}">株式会社PALTEK
                <span class="top_year">@include('components.year', ['target' => 'paltek'])</sapn>
            </a>
        </h3>
        <h3 class="history">
            <a href="{{ route('mp_yourmystar') }}">ユアマイスター株式会社
                <span class="top_year">@include('components.year', ['target' => 'yourmystar'])</sapn>
            </a>
        </h3>
        <h3 class="history">
            <a href="{{ route('mp_idealump') }}">株式会社アイデアランプ
                <span class="top_year">@include('components.year', ['target' => 'idealump'])</sapn>
            </a>
        </h3>
        <h3 class="history">
            <a href="{{ route('mp_current') }}">カレント自動車株式会社
                <span class="top_year">@include('components.year', ['target' => 'current'])></sapn>
        </h3>

</div>
</body>
</html>
