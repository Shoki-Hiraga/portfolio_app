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
    <li><a href="{{ route('outbound.redirect', ['key' => 'campgarage']) }}" target="_blank" rel="nofollow">中古キャンプカー販売サイト</a><br></li>
    <li><a href="{{ route('outbound.redirect', ['key' => 'euroauto']) }}" target="_blank" rel="nofollow">部品販売ECサイト</a><br></li>
    <li>その他8プロダクトほどのサーバー含めた運用</li>
  </ul>

  <h3>実績</h3>

    <ul>
    <li>
      <strong>PM／ディレクション業務</strong><br>
      <ul>
        <li>見込み数値の算出</li>
        <li>仕様策定</li>
        <li>システム / デザイン要件定義</li>
          <div class="notion_link">
            <strong>
                <a href="https://www.notion.so/1fb20fbb3a0c80558c68f60ca29588a2" target="_blank" rel="nofollow"> 要件定義ドキュメント </a>
            </strong>
          </div>


      </ul>
    </li>

    <li>
      <strong>Webマーケティング業務</strong><br>
      GA4・Search Console・ahrefsなどを使用したデータ分析と広告運用。
      <ul>
        <li>SEO設計・TD調査・検索順位改善施策</li>
        <li>記事型SEOコンテンツのディレクションによる流入増</li>
        <li>DB型SEOの対策、およびシステム設計</li>
        <a href="{{ route('mp_result') }}" target="_blank">カレント自動車_SEO実績_Search Consoleデータ</a>
        <ul>
          <li>ポイント</li>
          <ul>
            <li>コアアップデートで下落していた順位を、下落前まで回復。</li>
            <li>新規実装の詳細ページでYoYでCV数600%改善</li>
          </ul>
        </ul>
                  
        <h1>旧車王の数字、ガレキャンのメディア数字、ヒストリアの25年ルールの数字</h1>
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

  <li>
      <strong>工夫した業務</strong><br>
      メンバー育成・チーム最適化・開発支援体制の構築。
      <ul>
        <li>テクニカルSEO、Search Engineを意識したクエリの実装</li>
        <li>持続的な開発が出来るよう自身がよりエンジニアに近い領域の業務を担当すること</li>
        <li>社内全体でクリエイターの工数が管理できて効率良く開発業務を進めること</li>
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
@include('components.job_historymenu_v2')
</body>
</html>
