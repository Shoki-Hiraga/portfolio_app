<!DOCTYPE html>
<html lang="ja">
<head>
@include('components.noindex')
@include('components.header')


<title>
ユアマイスター株式会社 @include('components.year', ['target' => 'yourmystar'])
@include('components.sitename')
</title>
</head>
<body>
    <h1>ユアマイスター株式会社<br>
      <span class="start_end">@include('components.year', ['target' => 'yourmystar'])</span>
    </h1>
    <h2></h2>

<div class="content">
  <h3>仕事内容</h3>
  <p>ユアマイスターの電話営業</p>

  <h3>営業スタイル</h3>
  <p>新規開拓 100％ 電話営業 (1日100件)</p>

  <h3>クライアント</h3>
  <p>個人事業主 (法人含む) ハウスクリーニング事業者</p>

  <h3>実績</h3>
  <ul>
    <li>
      <h4>新規荷電営業</h4>
      コロナ禍により、自宅での電話営業のみ。チーム全体で中盤をキープ。<br>
      5月～9月の5か月で<strong>40件の顧客を獲得</strong>
    </li>
    <li>
      <h4>メルマガ担当を兼務</h4>
      (5～6月のメール配信開封率、案件獲得率は営業部No.1)<br>
      作業的にやっていたメルマガに図説を加えて好評に。
      <ul>
        <li>メルマガ平均配信数：1,650件</li>
        <li>開封率：31.5%（530件）※平賀担当前は平均25%前後</li>
        <li>クリック率：0.7%（12件）</li>
        <li>案件獲得率：0.5%（9件）※メール開封数をベースに算出</li>
      </ul>
    </li>
    <li>
      <h4>アップセルPRJ</h4>
      無料プランの休眠顧客を有料プラン契約アップセルする施策を設計。<br>
      入力項目やバナーをテンプレート化し、加盟立上げをサポート。<br>
      ※見込み数値は達成できなかったものの、手間だったページ作成の業務マニュアル化に貢献。

    </li>
    <li>
      <h4>その他の指標</h4>
      <ul>
        <li>初のチームリーダーで部下育成とモチベーション管理で目標達成に貢献</li>
        <li>契約後のクレーム件数：半年で1件</li>
        <li>契約の途中離脱率：<strong>チームでNo.1（0.27%）</strong>（平均は約10%）</li>
        <li>出店後の顧客の総売上ランキング：6人中3位</li>
      </ul>
    </li>
  </ul>

  <h3>ポイント</h3>
    <div class="point_container">
      <div class="point_item">新規荷電営業</div>
      <div class="point_item">メルマガナーチャリング</div>
      <div class="point_item">施策の設計から実行</div>
      <div class="point_item">チームリーダー</div>
    </div>
  <!-- <p>
    無料プランに出店されている業者様を有料プランへのアップセルプロジェクトを担当。
    <br>
    1か月間限定にて、無料プランでも簡易的な有料プランを体験していただくことで、売上UP ⇒ 有料プランへ導入を目的としたプロジェクト。
    <br>
    大きな数字的結果は出せなかったが、<strong>商品ページの作成フォーマット</strong>をチームメンバーと制作。
    <br>
    営業部隊の業務効率化に貢献。このフォーマットはプロジェクト終了の翌月から<strong>新入社員研修の一環</strong>として活用されている。
  </p> -->
</div>
@include('components.job_historymenu_v2')  
</body>
</html>
