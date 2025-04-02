<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')


<title>
株式会社アイデアランプ @include('components.year', ['target' => 'idealump'])
@include('components.sitename')
</title>
</head>
<body>
    <h1>株式会社アイデアランプ<br>
      <span class="start_end">@include('components.year', ['target' => 'idealump'])</span>
    </h1>
    <h2>Webサイト・アプリ制作／Webマーケティング支援</h2>

<div class="content">
  <h3>仕事内容</h3>
  <p>
    Webサイト制作におけるディレクション業務と、Google Analyticsなどを用いたWebマーケティング業務を兼務。
  </p>

  <h3>クライアント</h3>
  <p>企業サイト運営会社、EC事業者など</p>

  <h3>実績</h3>
  <ul>
    <li>
      <strong>ディレクション業務</strong><br>
      新規Webサイト制作および既存サイトの機能追加における要件定義・ワイヤー作成・画面設計・進行管理などを担当。
        <li><a href ="{{ route('outbound.redirect', ['key' => 'shisaly']) }}" target="_blank" rel="nofollow" >shisaly.com</a>：Laravelを用いたフルスクラッチ案件（予算3,000万円）</li>
        <li><a href ="{{ route('outbound.redirect', ['key' => 'rabostar']) }}" target="_blank" rel="nofollow" >rabostar.com</a>：ASP・PHPによるスクラッチ開発（予算4,000万円）</li>
        <li>UI/UXを考慮した機能要件の仕様確定・デザイン確定・DBロジック連携</li>
      </ul>
    </li>

    <li>
      <strong>マーケティング業務</strong><br>
      GA4やahrefsなどを用いた競合調査・改善提案・広告運用まで幅広く対応。
      <ul>
        <li>レポート作成、改善提案書作成からリニューアルディレクションへの提案
        <a href="https://drive.google.com/drive/folders/1zI9YlOzoc-_4rG8gsx6Zcoylb5I8c4lq?usp=sharing" target="_blank">（提案資料）</a>
        </li>
        <li>広告媒体：Google・Yahoo!リスティング／ディスプレイ広告</li>
        <li>ECサイト広告にてROAS 300%を維持</li>
      </ul>
    </li>

    <li>
      <strong>その他の実績</strong>
      <ul>
        <li>Google広告にてCVR 1.7%改善（前年同月比）</li>
        <li>制作のテスト検証において必要な修正指示書を社内マニュアルとして独自作成。</li>
        <li>自社メディア改善：SEO構造ガイド作成 → 3ヶ月で15%アクセス増（YoY）</li>
      </ul>
    </li>
  </ul>

  <h3>ポイント</h3>
  <div class="point_container">
    <div class="point_item">Webディレクター（Laravel）</div>
    <div class="point_item">Webシステム開発の要件定義</div>
    <div class="point_item">KWマーケ（SEO対策）</div>
    <div class="point_item">データ分析（GA4やahrefs）</div>
    <div class="point_item">リスティング広告運用</div>
    <div class="point_item">githubへのpush</div>

  <!-- <p>
    ディレクターとして制作工程を一気通貫で担当しつつ、Webマーケターとして分析・改善も主導。
    <br>
    開発チーム・デザインチーム・マーケチームとの密な連携によって、戦略から実装、運用までを網羅したディレクションを実現。
    <br>
    データ分析に基づいた提案型の広告運用やSEO施策が強み。
  </p> -->
</div>
@include('components.job_historymenu')
</body>
</html>
