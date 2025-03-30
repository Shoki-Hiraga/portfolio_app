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

  <h3>営業スタイル</h3>
  <p>ディレクション業務・データ分析を元にした改善提案型マーケティング</p>

  <h3>クライアント</h3>
  <p>企業サイト運営会社、EC事業者など</p>

  <h3>実績</h3>
  <ul>
    <li>
      <strong>Webディレクション業務</strong><br>
      新規Webサイト制作および既存サイトの機能追加における要件定義・ワイヤー作成・画面設計・進行管理などを担当。
      <ul>
        <li><a href="https://shisaly.com/" target="_blank">shisaly.com</a>：Laravelを用いたフルスクラッチ案件（予算3,000万円）</li>
        <li><a href="https://rabostar.com/" target="_blank">rabostar.com</a>：ASP・PHPによるスクラッチ開発（予算4,000万円）</li>
        <li>UI/UXを考慮した機能要件の仕様確定・デザイン確定・DBロジック連携</li>
      </ul>
    </li>

    <li>
      <strong>Webマーケティング業務</strong><br>
      Google AnalyticsやSEOツールを用いた競合調査・改善提案・広告運用まで幅広く対応。
      <ul>
        <li>使用ツール：Google Analytics / Search Console / ahrefs / ubersuggest</li>
        <li>レポートや改善提案書の作成 → リニューアルディレクションにつなげる</li>
        <li>広告媒体：Google・Yahoo!リスティング／ディスプレイ広告</li>
        <li>ECサイト広告にてROAS 300%を維持</li>
      </ul>
    </li>

    <li>
      <strong>その他の実績</strong>
      <ul>
        <li>2021年12月、Google広告にてCVR 1.7%改善（前年同月比）</li>
        <li>社内標準化：テスト修正依頼用シートを独自作成・チーム内で導入</li>
        <li>自社メディア改善：SEO構造ガイド作成 → 3ヶ月で15%アクセス増（YoY）</li>
        <li><a href="https://drive.google.com/drive/folders/1zI9YlOzoc-_4rG8gsx6Zcoylb5I8c4lq?usp=sharing" target="_blank">マーケ資料ポートフォリオ</a></li>
      </ul>
    </li>
  </ul>

  <h3>ポイント</h3>
  <p>
    ディレクターとして制作工程を一気通貫で担当しつつ、Webマーケターとして分析・改善も主導。
    <br>
    開発チーム・デザインチーム・マーケチームとの密な連携によって、戦略から実装、運用までを網羅したディレクションを実現。
    <br>
    データ分析に基づいた提案型の広告運用やSEO施策が強み。
  </p>
</div>
@include('components.job_historymenu')
</body>
</html>
