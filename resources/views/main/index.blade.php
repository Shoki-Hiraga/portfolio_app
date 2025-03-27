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
    <div class="history">
        <h2>自己紹介</h2>
            <p>1992年11月24日、神奈川県横浜市で生まれ、中学、高校ではバレーボール部で副主将、主将を務める。<br>
                大学では念願の心理学を専攻して没頭。<br>
                その傍らで車とバイクの整備に没頭。
            </p>
            <p>車とバイクとDIY好きを拗らせ、日産スカイラインに、日産ローレルのフロントフェイスを組合せる<br>"顔面スワップ"をプライベートで成し遂げる</p>
            <img src="{{ asset('images/samukawa.jpg') }}" alt="車の画像" class="top_image">

            <p>その後、WebディレクターになるきっかけとなったWPのブログサイト、<a href="https://332blog.com/">332blog</a> を立ち上げる
            </p>
            <p>
                Web制作会社にて、ディレクターとして <a href="https://shisaly.com/">shisaly</a> のシステム開発ディレクターとして従事。<br>
                Webサイトを作る楽しさを知り、ディレクターとしてchatGPTを駆使して、Webサイトを立ち上げ。<br>
                <a href="https://carprice-info.332web.com/">中古車買取相場データベース</a>
                <p>Laravel フレームワークを使い、pythonにてスクレイピング処理をcronにて実行。<br>
                    スクレイピングしたデータは直接DBに格納し、多少データを加工してLaravelと共有しているマスターデータに相場情報を統合する。
                </p>
                <img src="{{ asset('images/market_price.png') }}" alt="Webサイト構成図" class="top_image">

            </p>
        <h2>職務経歴一覧</h2>
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
