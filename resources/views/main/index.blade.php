<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')


<title>{{ $python_title }}</title>
</head>
<body>
    <h1>{{$python_h1}}</h1>
    <div class="history">
        <p>
            昔から車が好きで、それがきっかけでDIYにハマり、今となってはWebサイトの技術にハマり、ソフトでもハードでもモノづくりが好きです。
            以下に簡単なポートフォリオや職務経歴をまとめましたので、ぜひご覧いただけますと幸いです。
        </p>
        <img src="{{ asset('images/332R.jpg') }}" alt="車の画像" class="top_image">
        <!-- <img src="{{ asset('images/samukawa.jpg') }}" alt="車の画像" class="top_image"> -->

        <h2>プロフィール</h2>
            <div class="card">
                    <div class="left">
                        <div class="profile_top">
                            <img src="{{ asset('images/shoki_hiraga.png') }}" alt="平賀翔貴" class="top_image">
                            <h2 class="name">平賀 翔貴</h2>
                            <p class="name">ひらが しょうき</p>
                        </div>
                    </div>
                <div class="scroll_row">
                    <div class="right">
                        <div class="info-row">
                            <div class="label">出身校</div>
                            <div class="value">桜美林大学 LA学群 心理学専攻</div>
                        </div>
                        <div class="info-row">
                            <div class="label">現職</div>
                            <div class="value">カレント自動車株式会社</div>
                        </div>
                        <div class="info-row">
                            <div class="label">所属部門</div>
                            <div class="value">IT事業部</div>
                        </div>
                        <div class="info-row">
                            <div class="label">現職種</div>
                            <div class="value"> PdM 兼 開発ディレクター 兼 SEO担当</div>
                        </div>
                        <div class="info-row">
                            <div class="label">経験職種</div>
                            <div class="value">法人新規営業 / 個人新規営業 / Webディレクター / PdM / Webマーケ全般</div>
                        </div>    
                        <div class="info-row">
                            <div class="label">趣味</div>
                            <div class="value">車、バイクのカスタム / Webサイト運用</div>
                        </div>
                        <div class="info-row">
                            <div class="label">特技</div>
                            <div class="value">Pythonスクレイピング / スプレッドシート関数</div>
                        </div>
                        <div class="info-row">
                            <div class="label">ハードスキル</div>
                            <div class="value">GA4 / Search Console / ahrefs / Clarity / PHP Laravel / Python / GPTプログラミング / Figma / AWS (少々) / Xserver / Officeソフト</div>
                        </div>
                        <div class="info-row">
                            <div class="label">やりたいこと</div>
                            <div class="value">ディレクターやPdMとしての管理進行、Webシステムの理解、とSEOへの知見の3つを活かして、Webサイトの開発に携わっていきたい。</div>
                        </div>
                        <div class="info-row message">
                            <div class="label">将来の夢</div>
                            <div class="value">Webプロダクトの開発進行管理を通して、Webプロダクトの拡大に繋げ、結果としてビジネスの拡大に携わりたい。</div>
                        </div>
                    </div>
                </div>
            </div>
            <h2>スキル</h2>
            @include('components.chart.skillchart')
            <!-- <img src="{{ asset('images/スキルチャート.png') }}" alt="平賀翔貴" class="top_image"> -->



            <h2>ポートフォリオのポイント</h2>
                <div class="self">自己開発</div>
                    @include('components.web_link', ['target' => '332blog'])：一部確実に勝てるスモールワードでの設計、ボタンクリック計測
                    <br>
                    @include('components.web_link', ['target' => 'carprice'])：WebアプリはLaravel、データ取得はPython、CMSはワードプレス
                    <br>
                    @include('components.web_link', ['target' => 'portfolio'])：共通パーツは View::share でコンポーネント化
                <div class="organization">会社開発</div>
                    @include('components.web_link', ['target' => 'shisaly'])：顧客折衝～要件定義～各メンバーのディレクションを主担当で進行
                    <br>
                    @include('components.web_link', ['target' => 'rabostar'])：リニューアルディレクション、SEO設計、広告立上げ / 運用
                    <br>
                    @include('components.web_link', ['target' => 'qsha_oh'])：Webデータ分析、要件定義、開発ディレクション、メディア設計など
                    <br>
                    @include('components.web_link', ['target' => 'gare_camp'])：Webデータ分析、要件定義、開発ディレクション、メディア設計など
                    <!-- <h3>
                        <style>
                        h3 {
                            text-align: center;
                        }
                        </style>
                        @include('components.web_link', ['target' => 'carprice'])の構成図
                    </h3>
                    <img src="{{ asset('images/market_price.png') }}" alt="Webサイトの設計" class="top_image"> -->
            @include('components.job_historymenu_v2')
        </div>
    </body>
</html>
