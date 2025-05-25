<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')

<link rel="stylesheet" href="{{ asset('/css/chart.css') }}">

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
      のYoY比較
    </p>

<div class="reslut_content">
    <div class="box-chart-wrapper">
        @include('components.chart.maker_chart')
        <p>コアアップデートで順位が下落する中クエリを変更し、表示回数を増加。長期で見ると順位は回復傾向へ</p>
        <img src="{{ asset('images/currentmotor/GSC_maker_include.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
    </div>

    <div class="box-chart-wrapper">
      @include('components.chart.result_chart')
      <p>新規に詳細ページを実装したことで、YoYでCTRが180%ほど改善</p>
          <img src="{{ asset('images/currentmotor/GSC_result_include.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
    </div>
    <div class="box-chart-wrapper">
      @include('components.chart.usersvoice_chart')
      <p>コアアップデートで順位が下落する中クエリや内部リンクを最適化し、2025年5月時点での順位は回復傾向へ</p>
        <img src="{{ asset('images/currentmotor/GSC_usersvoice_include.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">
    </div>

  </div>
@include('components.job_historymenu_v2')
</body>
</html>
