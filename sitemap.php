<?php
/*Template Name: サイトマップ
*/
?>
<?php get_header(); ?>

  <?php while (have_posts()) : the_post(); // 繰り返し処理開始  ?>
  
<!-- sb-site -->
<div id="sb-site" class="lower sitemap">

  <!-- mv -->
  <div id="mv">
    <div class="mv-inner01">
      <div class="title-area title-area01">
        <div class="l-main-title main-title01"><h1 class="bold f-family01">サイトマップ</h1></div>
      </div>
    </div>
  </div>
  <!-- /mv -->
  
  <?php get_template_part('breadcrumb'); ?>

  <!-- section02-->
  <section class="section sec01" id="sec01">
    <div class="sec-main">
      <div class="sec-block block01">
        <div class="title-area title-area01">
          <div class="block-title block-title01"><h4 class="title-inner f-family01 bold">サイトマップ</h4></div>
        </div>
        <div class="text-area text-area01">
          <div class="text-inner">
            <ul>
              <li><a href="?page_id=2">HOME</a></li>
              <li>
                <dl class="clearfix">
                  <dt><a href="service">サービス案内</a></dt>
                  <dd>&#9500; <a href="service-01">店舗まるごとリース</a></dd>
                  <dd>&#9500; <a href="service-02">内装・設備リース</a></dd>
                  <dd>&#9492; <a href="service-03">リースバック</a></dd>
                </dl>
              </li>
              <li><a href="faq">よくある質問</a></li>
              <li>
                <dl class="clearfix">
                  <dt>主な実績</dt>
                  <dd>&#9500; <a href="results">主な実績</a></dd>
                  <dd>&#9492; <a href="interview">オーナー様インタビュー</a></dd>
                </dl>
              </li>
              <li><a href="realtor">不動産業者様へ</a></li>
              <li><a href="blog">スタッフブログ</a></li>
              <li><a href="inquiry">お問合せ・無料相談のお申込み</a></li>
              <li>
                <dl>
                  <dt>採用情報</dt>
                  <dd>&#9500; <a href="recruit">採用情報</a></dd>
                  <dd>&#9492; <a href="recruit-form">採用フォーム</a></dd>
                </dl>
              </li>
              <li><a href="company">会社情報</a></li>
              <li><a href="privacy">プライバシーポリシー・免責事項</a></li>
              <li><a href="sitemap">サイトマップ</a></li>
              <li><a href="link">関連サイトリンク集</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /section01-->
  
  <?php endwhile; /** 繰り返し処理終了 */ ?>
   

<!-- / index.php -->
<?php get_footer(); ?>