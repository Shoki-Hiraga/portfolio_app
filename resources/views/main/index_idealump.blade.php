<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')
<link rel="stylesheet" href="{{ asset('css/link.css') }}">


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
      <h4>ディレクション業務</h4>
      新規Webサイト制作および既存サイトの機能追加における要件定義・ワイヤー作成・画面設計・進行管理などを担当。
      <br>
        <li><a href ="{{ route('outbound.redirect', ['key' => 'shisaly']) }}" target="_blank" rel="nofollow" >shisaly.com</a>：Laravelを用いたフルスクラッチ案件</li>
        <div class=image_container>
          <img src="{{ asset('images/idealump/SP_shisaly.png') }}" alt="ShisalyのSP画面" class="prof_image">

          <table class="dir-point" border="1">
            <thead>
              <tr>
                <th>項目</th>
                <th>内容</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>予算</td>
                <td>3,000万円</td>
              </tr>
              <tr>
                <td>制作期間</td>
                <td>13か月</td>
              </tr>
              <tr>
                <td>PM 兼<br>ディレクター</td>
                <td>1名</td>
              </tr>
              <tr>
                <td>デザイナー</td>
                <td>1名</td>
              </tr>
              <tr>
                <td>コーダー</td>
                <td>2名</td>
              </tr>
              <tr>
                <td>エンジニア</td>
                <td>海外拠点2名、社内1名</td>
              </tr>
              <tr>
                <td>担当領域</td>
                <td>PM、ディレクション、要件定義、<br>SEOクエリ設計</td>
              </tr>
              <tr>
                <td>ポイント</td>
                <td>
                  予算が少ない中サービスをローンチ<br>をするに当たって、予算に合わせつつ<br>最小限の機能を実装してリリース。<br>
                  クライアントへは丁寧に説明をする<br>ことで、
                </td>
                </tr>
            </tbody>
          </table>
        </div>

        <br>
        <br>
        <br>
        <li><a href ="{{ route('outbound.redirect', ['key' => 'rabostar']) }}" target="_blank" rel="nofollow" >rabostar.com</a>：ASP・PHPによるスクラッチ開発</li>
        <div class=image_container>
          <img src="{{ asset('images/idealump/SP_rabostar.png') }}" alt="ShisalyのSP画面" class="prof_image">

          <table class="dir-point" border="1">
            <thead>
              <tr>
                <th>項目</th>
                <th>内容</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>予算</td>
                <td>6,000万円</td>
              </tr>
              <tr>
                <td>制作期間</td>
                <td>8か月</td>
              </tr>
              <tr>
                <td>PM</td>
                <td>2名</td>
              </tr>
              <tr>
                <td>ディレクター</td>
                <td>2名</td>
              </tr>
              <tr>
                <td>デザイナー</td>
                <td>1名</td>
              </tr>
              <tr>
                <td>コーダー</td>
                <td>2名</td>
              </tr>
              <tr>
                <td>エンジニア</td>
                <td>社内2名</td>
              </tr>
              <tr>
                <td>担当領域</td>
                <td>PM、ディレクション、SEOクエリ<br>設計、広告立上げ・運用</td>
              </tr>
              <tr>
                <td>ポイント</td>
                <td>
                  途中から要件定義、SEO対策の実装
                  <br>
                  広告運用まで担当し、クリエイティ<br>ブの差替えで前任の代理店よりCVR<br>1.7%改善。
                  <!-- <br>
                  ECシステム、カートシステム、試着<br>システムの構築 -->
                </td>
                </tr>
            </tbody>
          </table>
        </div>
    </li>
  </ul>

  </div>

  <h4>マーケティング業務</h4>
      GA4やahrefsなどを用いた競合調査・改善提案・広告運用まで幅広く対応。
      <ul>
        <strong><li>実績</li></strong>
        <ul>
          <li>Google広告にて<span class="chart-red">CVR 1.7%改善</span>（前年同月比）</li>
          <li>ROAS <span class="chart-red">90%代  → 300%代</span>まで改善</li>
            <ul>
              <li>広告媒体：Google・Yahoo!リスティング／ディスプレイ広告</li>
                <img src="{{ asset('images/idealump/rabostar_ad.png') }}" alt="rabostarの広告画像" class="prof_image">
                <br>※一例です
            </ul>
              <li>GA4やahrefsなどを用いた競合調査改善提案書作成
            <br>
            <a href="https://drive.google.com/file/d/1Pdu6zjgnvW-effyNPM3B3vQjYbgYIVKf/view?usp=drive_link" target="_blank">提案資料1</a>
            <br>
            <a href="https://drive.google.com/file/d/1_DpwRSVWWuS7qD1hCghrX_uSIV2m3q0H/view?usp=drive_link" target="_blank">提案資料2</a>
          </li>
          <li>自社メディア改善：SEO構造ガイド作成 → 3ヶ月で<span class="chart-red">15%アクセス増（YoY）</span></li>
        </ul>
      </ul>
    </ul>

  <h4>その他の実績</h4>
    <ul>
        <li>制作のテスト検証において必要な修正指示書を社内マニュアルとして独自作成。</li>
    </ul>

    <h4>工夫した業務</h4>
      <ul>
        <li>とにかくデバッグ管理での抜け漏れを仕組で減らすこと。</li>
        <li>webシステムの仕組を理解してエンジニアとのコミュニケーションをスムーズにすること。</li>
        <li>SEO的に優れたWebサイトを作れるよう、インプットを怠らないこと。</li>
        <div class=image_container>
          <img src="{{ asset('images/idealump/shisaly_td.png') }}" alt="スプレッドシートの管理画像" class="prof_image">
          <img src="{{ asset('images/idealump/shisaly_prj_manage.png') }}" alt="スプレッドシートのTD定義画像" class="prof_image">
        </div>
      </ul>
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

@include('components.job_historymenu_v2')
</body>
</html>
