<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')

<title>
カレント自動車株式会社 @include('components.year', ['target' => 'current'])
@include('components.sitename')
</title>
</head>
<body>
  <h1>カレント自動車株式会社<br>
    <span class="start_end">@include('components.year', ['target' => 'current'])</span>
  </h1>
    <h2>テクニカルSEOでの対策実績</h2>
      <p style="text-align: center;">
        2024年3月20日～5月20日<br>
        2025年3月20日～5月20日<br>
      </p>
      <h3 class="chart-center">旧車王：Search Console YoY比較</h3>

<div class="reslut_content">
    <div class="box-chart-wrapper">
        <p>コアアップデートで順位が下落する中クエリを変更し、表示回数を増加。ページ品質制御を実装し、2025年5月時点での順位は<span class="chart-red">下落前と同水準で回復傾向</span>へ。</p>
        <img src="{{ asset('images/currentmotor/GSC_maker_include.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
    </div>

    <div class="box-chart-wrapper">
      <p>新規に詳細ページを実装したことで動的ページが増加し、<span class="chart-red">YoYでCTRが180%ほど改善</span>（ページ品質制御機能もセット）。</p>
      @include('components.chart.gsc_result_chart')
    </div>
    <div class="box-chart-wrapper">
      <p>コアアップデートで順位が下落する中クエリや内部リンクを最適化、ページ品質制御を実装し、2025年5月時点での順位は<span class="chart-red">下落前と同水準で回復傾向</span>へ。</p>
        <img src="{{ asset('images/currentmotor/GSC_usersvoice_include.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
    </div>


  <h3 class="chart-center">旧車王：GA4 YoY比較</h3>
    <div class="box-chart-wrapper">
        <p>コアアップデートで順位が下落する中クエリを変更。<span class="chart-red">セッションの大幅減少を避ける</span>ことができ、それによってCV数の減少も抑えられた。</p>
        @include('components.chart.ga4_maker_chart')
    </div>

    <div class="box-chart-wrapper">
      <p>新規に詳細ページを実装したことで、YoYでセッション数を大幅に改善し、<span class="chart-red">CV数は500%改善</span>。</p>
      @include('components.chart.ga4_result_chart')
    </div>

    <div class="box-chart-wrapper">
      <p>コアアップデートで順位が下落している中、CVが少ないページのため打ち手が遅れたことが原因で良い成績ではなかった。<span class="chart-red">2025年5月時点での順位は下落前と同水準で回復傾向</span>へ。</p>
      @include('components.chart.ga4_usersvoice_chart')
    </div>

  <h3 class="chart-center">旧車王ヒストリア：Search Console 25年ルール記事</h3>
    <div class="box-chart-wrapper">
      <p>過去バズった、旧車25年ルール記事をテンプレート化、トピッククラスター型で車種毎の記事を量産。Google Discoverで定期的に流入増で、運用開始から<span class="chart-red">300%ほど認知拡大に貢献</span>。</p>
        <img src="{{ asset('images/currentmotor/historia_25year_rule.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
    </div>

  <h3 class="chart-center">ガレキャン通信：Search Console クエリデータ</h3>
    <div class="box-chart-wrapper">
      <p>Webライターさんと協議しならがKWを選定し、書いた記事の<span class="chart-red">ザックリ70%程度は上位10位圏内</span>をマーク。</p>
        <img src="{{ asset('images/currentmotor/gare_camp.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
      <a href="https://docs.google.com/spreadsheets/d/17Ce6L268v1A4Jps9qaqqoHuBmdTp8u926ZXGr5M2avM/edit?gid=1116325167#gid=1116325167"target="_blank" style="display: block; text-align: center !important;">
      スプレッドシートデータ
    </a>
    </div>

    <a href="{{ route('mp_result_all') }}" target="_blank" style="display: block; text-align: center !important;">
      カレント自動車_SEO実績_Search Consoleデータ
    </a>
</div>

@include('components.job_historymenu_v2')
</body>
</html>
