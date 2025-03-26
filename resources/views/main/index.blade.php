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
    <h2>index</h2>
    <p>株式会社PALTEK @include('components.year', ['target' => 'paltek'])</p>
    <p>ユアマイスター株式会社 @include('components.year', ['target' => 'yourmystar'])</p>
    <p>株式会社アイデアランプ @include('components.year', ['target' => 'idealump'])</p>
    <p>カレント自動車株式会社 @include('components.year', ['target' => 'current'])</p>
</body>
</html>
