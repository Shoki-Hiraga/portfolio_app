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
    <h2>システム開発ディレクション／SEO対策／データ分析／インフラ保守運用</h2>

<div class="content">
  <h3>仕事内容</h3>
  <p>
    PdM、Web開発ディレクション、インフラ保守運用ディレクション、テクニカルSEOの改修、メディア施策設計など、実作業から社内外の調整まで。
  </p>

  <h3>主な担当プロダクト</h3>
  <ul>
    <li><a href="{{ route('outbound.redirect', ['key' => 'qshaoh']) }}" target="_blank" rel="nofollow">旧車王（中古車査定申込サイト）</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'qshaoh_historia']) }}" target="_blank" rel="nofollow">旧車王ヒストリア（旧車専門メディア）</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'campgarage']) }}" target="_blank" rel="nofollow">ガレージカレントCamp（中古キャンプカー販売サイト）</a><br></li>
    <li>その他8プロダクトほどのサーバー含めた運用</li>
  </ul>
        <img src="{{ asset('images/currentmotor/main_product.png') }}" alt="Search Consoleデータ" class="prof_image_gsc">

  <h3>実績</h3>

    <ul>
    <li>
      <strong>PM／ディレクション業務</strong><br>
      システム開発に関わる業務全般を広く担当。
      <ul>
        <li>見込み数値の算出、PDCA基盤構築</li>
        <li>仕様策定</li>
        <li>システム / デザイン要件定義</li>
        <li>スケジュール管理 / 開発進行</li>
          <div class="current_result_link">
            <strong>
                <a href="https://www.notion.so/1fb20fbb3a0c80558c68f60ca29588a2" target="_blank" rel="nofollow"> 要件定義ドキュメント </a>
            </strong>
          </div>
      </ul>
    </li>

    <li>
      <strong>Webマーケティング業務</strong><br>
      GA4・Search Console・ahrefsなどを使用したデータ分析。
      <ul>
        <li>記事型SEOコンテンツ施策設計による流入増</li>
        <li>DB型SEOの対策、およびシステム設計</li>
          <div class="current_result_link">
            <strong>
              <a href="{{ route('mp_result') }}" target="_blank">SEO実績データ</a>
            </strong>
          </div>
        <ul>
          <li>ポイント</li>
          <ul>
            <li><a href="{{ route('outbound.redirect', ['key' => 'qshaoh']) }}" target="_blank" rel="nofollow">旧車王</a>
            ：コアアップデートで下落していた順位を、下落前まで回復させ、詳細ページの新規実装でYoYで<span class="chart-red">CV数500%改善</span>。
            </li>
            <li><a href="{{ route('outbound.redirect', ['key' => 'qshaoh_historia']) }}" target="_blank" rel="nofollow">旧車王ヒストリア</a>
            ：過去バズった記事をテンプレート化、トピッククラスター型で記事を増やし、運用開始から<span class="chart-red">200%ほど認知拡大</span>に貢献。
            </li>
            <li><a href="{{ route('outbound.redirect', ['key' => 'campgarage_media']) }}" target="_blank" rel="nofollow">ガレキャン通信</a>
            ：Webライターさんと協議しならがKWを選定し、書いた記事の<span class="chart-red">ザックリ70%程度は上位10位圏内</span>をマーク。
            </li>
          </ul>
        </ul>
        <!-- <li>リスティング広告（簡易運用）を通じたCTR改善</li>
        <li>動的CTA実装によるCTR増加</li> -->
      </ul>
    </li>

    <li>
      <strong>マネジメント業務</strong><br>
      KPI設計・メンバー育成・チーム最適化・開発支援体制の構築。
      <ul>
        <li>メンバーの業務に合わせたKPI設計</li>
        <li>開発体制の立て直しと体制維持</li>
      </ul>
    </li>
  </ul>


  <h3>ポイント</h3>
    <div class="point_container">
      <div class="point_item">プロダクトマネージャー</div>
      <div class="point_item">Webディレクター</div>
      <div class="point_item">Webデータ分析</div>
      <div class="point_item">DB型SEO対策</div>
      <div class="point_item">コンテンツSEO</div>
      <div class="point_item">メンバーマネジメント</div>
    </div>
  <!-- <p>
    退職者が相次ぎ、1/4以下に縮小したチーム環境において、運用から改善まで多岐にわたる業務を支援。
    <br>
    組織の崩壊を防ぐためのディレクション、技術ドキュメント整備、施策管理体制構築を並行して遂行。
    <br>
    27歳前後の若手中心チームで、調整役・推進役としてチームの機能維持に貢献。
  </p> -->
</div>
@include('components.job_historymenu_v2')
</body>
</html>
