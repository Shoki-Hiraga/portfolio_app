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
    <h2>全システム開発ディレクション／SEO対策／データ分析／インフラ保守運用</h2>

<div class="content">
  <h3>仕事内容</h3>
  <p>
    Webサイトエンハンス開発のPM、テクニカルSEOの改修、オウンドメディア施策設計、リスティング広告運用、インフラの簡易保守など。
    <br>
    PM／開発ディレクション／SEM／マネジメント業務を兼務。
  </p>

  <h3>営業スタイル</h3>
  <p>社内外調整・施策実装中心の開発ディレクションとSEO・広告分析に基づく改善提案</p>

  <h3>担当プロダクト</h3>
  <ul>
    <li><a href="{{ route('outbound.redirect', ['key' => 'qshaoh']) }}" target="_blank" rel="nofollow">旧車王（中古車査定申込サイト）</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'campgarage']) }}" target="_blank" rel="nofollow">中古キャンプカー販売サイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'euroauto']) }}" target="_blank" rel="nofollow">部品販売ECサイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'gaishaoh']) }}" target="_blank" rel="nofollow">外車王（外車査定申込サイト）</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'sportscarlab']) }}" target="_blank" rel="nofollow">スポーツカーラボ（中古車査定申込サイト）</a><br></li>
    <li><a href ="{{ route('outbound.redirect', ['key' => 'currentmotor']) }}" target="_blank" rel="nofollow" >コーポレートサイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'garagecurrent']) }}" target="_blank" rel="nofollow">中古車販売サイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'directgarage']) }}" target="_blank" rel="nofollow">中古車販売サイト（LPのみ）</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'currenttech']) }}" target="_blank" rel="nofollow">整備センター受付サイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'icin']) }}" target="_blank" rel="nofollow">輸入車整備FC本部サイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'drimportcar']) }}" target="_blank" rel="nofollow">輸入車整備FC集客サイト</a><br></li>
    <li>AWSのログ監視（簡易保守運用）<br></li>
    <li>Xserverの保守運用<br></li>
    <li>基幹システム（セールスフォース）のシステムサポート<br></li>
</ul>

  <h3>実績</h3>
  <ul>
    <li>
      <strong>PM／ディレクション業務</strong><br>
      Webサイトの保守～エンハンス開発を担当。ワイヤー作成、仕様策定、技術面の1次対応も兼務。
      <ul>
        <li>見込み数値の算出</li>
        <li>仕様策定</li>
        <li>システム / デザイン要件定義</li>
        <li>開発スケジュール管理</li>
        <li>社内調整 / 外部パートナー調整</li>
        <li>施策実装に関する技術面の相談</li>
        <li>XサーバーやAWSのログチェックや簡単な設定</li>
        <li>基幹システムの技術フォロー</li>
        <li>Pythonによる業務効率化（データ分析含む）</li>
        <li>ECサイト入稿用のデータ整形</li>
      </ul>
    </li>

    <li>
      <strong>Webマーケティング業務</strong><br>
      GA4・Search Console・ahrefsなどを使用したデータ分析と広告運用。
      <ul>
        <li>SEO設計・TD調査・検索順位改善施策</li>
        <li>記事型SEOコンテンツのディレクションによる流入増</li>
        <li>DB型SEOの対策、およびシステム設計</li>
        <li>リスティング広告（簡易運用）を通じたCTR改善</li>
        <li>動的CTA実装によるCTR増加</li>
      </ul>
    </li>

    <li>
      <strong>マネジメント業務</strong><br>
      メンバー育成・チーム最適化・開発支援体制の構築。
      <ul>
        <li>エンジニア・ディレクション・新人教育の各領域を横断マネジメント</li>
        <li>ブラックボックス化していた技術要素のドキュメント整備（外注）</li>
        <li>開発体制の立て直しと体制維持に尽力</li>
      </ul>
    </li>
  </ul>

  <h3>ポイント</h3>
    <div class="point_container">
      <div class="point_item">プロダクトマネージャー</div>
      <div class="point_item">Webディレクター</div>
      <div class="point_item">Webデータ分析</div>
      <div class="point_item">インフラ保守</div>
      <div class="point_item">DB型SEO対策</div>
      <div class="point_item">コンテンツSEO</div>
    </div>
  <!-- <p>
    退職者が相次ぎ、1/4以下に縮小したチーム環境において、運用から改善まで多岐にわたる業務を支援。
    <br>
    組織の崩壊を防ぐためのディレクション、技術ドキュメント整備、施策管理体制構築を並行して遂行。
    <br>
    27歳前後の若手中心チームで、調整役・推進役としてチームの機能維持に貢献。
  </p> -->
</div>
@include('components.job_historymenu')
</body>
</html>
