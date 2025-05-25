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

<div class="reslut_content">
  @include('components.chart.maker_chart')
  @include('components.chart.result_chart')
  @include('components.chart.usersvoice_chart')
</div>
@include('components.job_historymenu_v2')
</body>
</html>
