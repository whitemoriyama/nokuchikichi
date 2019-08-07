<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel='index' title='Creative + Local = Happy future' href='<?php echo home_url(); ?>' />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo home_url(); ?>/favicon.ico" rel="shortcut icon" />
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
<script src="https://use.typekit.net/ulg0uky.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.matchHeight.js"></script>
<script>
$(function(){
　　$('.postTitle').matchHeight();
    $('.wardTitle').matchHeight();

    // mainVisualのfadein
    $('#mainVisual').append('<div id="curtain">');
    $('#curtain').css({
        position: 'absolute',
        left: 0, top: 0,
        width: '100%', height: '100%',
        backgroundColor: '#fff',
        opacity: 100
    }).animate({
        opacity: 0
    }, 2000, function () {
        $(this).remove();
    });
});
</script>
<?php wp_head(); ?>
</head>
<?php if(0) { ?>
<?php } ?>
<body <?php body_class(); ?>>
  <div id="mainWrapper">
    <div class="headerArea clearfix">
      <h1 class="siteTitle"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/headerlogo.svg" alt="<?php bloginfo('name'); ?>"></a></h1>
      <nav class="headerNavi">
        <ul>
          <li><a href="#ability">ノクチ基地のできること</a></li>
          <li><a href="#member">メンバー</a></li>
          <li><a href="#work">制作実績</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
          <li><a href="https://www.facebook.com/nokuchikichi/" target="_blank">Facebook</a></li>
        </ul>
      </nav>
    </div>
    <div id="mainVisual">
      <div class="mainVisualInner">
        <div class="mainMessage">
          <p class="mainLogo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>"></p>
          <p class="mainCatch">Creative + Local = Happy future</p>
        </div>
      </div>
    </div>
    <div id="mainContent" class="clearfix">
      <div id="ourMisson">
        <h2 class="mincho">クリエイティブの地産地消、<br class="sp">それが私たちのミッション</h2>
        <p>溝の口をベースに活動するクリエイターたちが、『ジモトをもっと楽しく、住みやすくしたい」と自然発生的に集まりました。<br class="pc">
        ジモトを愛し、ジモトの役に立ちたい。そんなクリエイターチームが「ノクチ基地」です。<br>
        自分たちの持っているさまざまなスキルを活かすことで、ジモトをもっと元気に、もっと暮らしやすくできると思っています。<br>
        ジモトで生活するからこそできる「徹底したジモト目線」がわたしたちの強みです。<br class="pc">
        うまく表現できなかったみなさんの気持ちや想いを、わたしたちが代わりにカタチにして届けます。<br class="pc">
        クリエイティブが変わるだけで、こんなに生活が楽しくなるということを肌で感じてもらいたい。<br>
        クリエイティブの地産地消、それが私たち「ノクチ基地」のミッションです。</p>
      </div>
      <section id="newsRelease">
        <h3 class="newsTitle mincho">News</h3>
        <nav class="newsList">
          <ul>
            <?php
                $args = array(
                    'posts_per_page' => 4,
                    'category_name' => 'news',
                    'orderby' => 'ASC'
                );
            ?>
            <?php $query = new WP_Query( $args ); ?>
            <?php if($query -> have_posts()): ?>
            <?php while($query -> have_posts()): $query->the_post();?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <figure><?php the_post_thumbnail(); ?></figure>
                  <p class="postDate"><?php echo get_the_date('Y.m.d'); ?></p>
                  <p class="postTitle"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </nav>
      </section>
      <section id="ability">
        <div class="abilityMain">
          <div class="mainInner">
            <h3 class="contentsTitle mincho">ノクチ基地のできること</h3>
          </div>
        </div>
        <nav class="abilityMenu">
          <ul>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/abilityContents.svg" alt="コンテンツ企画提案"></figure>
              <p class="abilityTitle">コンテンツ企画提案</p>
              <p class="abilityText">地元イベントの企画や、WEBや動画、印刷物などを通じた地元ブランディング企画、さらに店舗や地域活性のためのさまざまなコンテンツをトータルでご提案します。</p>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/abilityWebdesign.svg" alt="ウェブサイト制作"></figure>
              <p class="abilityTitle">ウェブサイト制作</p>
              <p class="abilityText">企業、店舗、地元各施設など、さまざまなニーズに合わせてウェブサイトを制作します。また公開後の運用、SNS活用のご提案など、トータルにサポートします。</p>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/abilityDesign.svg" alt="デザイン制作"></figure>
              <p class="abilityTitle">デザイン制作</p>
              <p class="abilityText">企業、店舗、地元各施設のシンボルとなるロゴをオリジナルデザインでご提案します。また各種ノベルティグッズなどの販促物や、商品パッケージなども制作します。</p>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/abilityMovie.svg" alt="写真/映像制作"></figure>
              <p class="abilityTitle">写真/映像制作</p>
              <p class="abilityText">イベント、店舗、人物、商品などの写真撮影をします。また地元CM、サービス説明、インタビュー、イベント用PRムービーなど、ニーズに応じた撮影・編集をします。</p>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/abilityWriting.svg" alt="編集・ライティング"></figure>
              <p class="abilityTitle">編集・ライティング</p>
              <p class="abilityText">WEBサイトやパンフットなどの販促物でのわかりやすい文章、イベントやインタビューなどの取材・執筆、さらに広告コピー、会報誌など、テキスト全般を作成します。</p>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/abilityDtp.svg" alt="印刷物制作"></figure>
              <p class="abilityTitle">印刷物制作</p>
              <p class="abilityText">広告や宣伝で使用するフライヤーやポスター、販促物、名刺、パンフレットなどの印刷物を作成します。撮影、ライティング、デザインとオールインワンで制作します。</p>
            </li>
          </ul>
        </nav>
      </section>
      <section id="member">
        <div class="memberMain">
          <div class="mainInner">
            <h3 class="contentsTitle mincho">メンバー</h3>
          </div>
        </div>
        <nav class="memberList">
          <ul>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/y_yamamoto.png" alt="山本美賢"></figure>
              <p class="memberPost">Production Producer</p>
              <p class="memberName">山本 美賢</p>
              <p class="memberPhonetic">Yoshikata Yamamoto</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/t_kuriyama.png" alt="栗山 琢宏"></figure>
              <p class="memberPost">Editor/Writer</p>
              <p class="memberName">栗山 琢宏</p>
              <p class="memberPhonetic">Takuhiro Kuriyama</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/m_hirao.png" alt="平尾 美絵"></figure>
              <p class="memberPost">Web Director</p>
              <p class="memberName">平尾 美絵</p>
              <p class="memberPhonetic">Mie Hirao</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/o_sueyoshi.png" alt="末吉 理"></figure>
              <p class="memberPost">Videographer</p>
              <p class="memberName">末吉 理</p>
              <p class="memberPhonetic">Osamu Sueyoshi</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
          </ul>
          <!--ul>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/y_yamamoto.png" alt="山本美賢"></figure>
              <p class="memberPost">Production Producer</p>
              <p class="memberName">山本 美賢</p>
              <p class="memberPhonetic">Yoshikata Yamamoto</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/t_kuriyama.png" alt="栗山 琢宏"></figure>
              <p class="memberPost">Editor/Writer</p>
              <p class="memberName">栗山 琢宏</p>
              <p class="memberPhonetic">Takuhiro Kuriyama</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/m_hirao.png" alt="平尾 美絵"></figure>
              <p class="memberPost">Web Director</p>
              <p class="memberName">平尾 美絵</p>
              <p class="memberPhonetic">Mie Hirao</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_directory'); ?>/img/o_sueyoshi.png" alt="末吉 理"></figure>
              <p class="memberPost">Videographer</p>
              <p class="memberName">末吉 理</p>
              <p class="memberPhonetic">Osamu Sueyoshi</p>
              <?php if(0) { ?><p class="memberText"></p><?php } ?>
            </li>
          </ul-->
        </nav>
      </section>
      <?php if(0) { ?>
      <section class="memberBlog">
        <h3 class="blogTitle">MEMBER’S BLOG</h3>
        <nav class="blogList">
          <ul>
            <?php
                $args = array(
                    'posts_per_page' => 4,
                    'category_name' => 'blog',
                    'orderby' => 'ASC'
                );
            ?>
            <?php $query = new WP_Query( $args ); ?>
            <?php if($query -> have_posts()): ?>
            <?php while($query -> have_posts()): $query->the_post();?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <figure><?php the_post_thumbnail(); ?></figure>
                  <p class="postDate"><?php echo get_the_date('Y.m.d'); ?></p>
                  <p class="postTitle"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </nav>
      </section>
      <?php } ?>
      <section id="work">
        <div class="workMain">
          <div class="mainInner">
            <h3 class="contentsTitle mincho">制作実績</h3>
          </div>
        </div>
        <nav class="workList">
          <p class="workMessage">現在、制作実績をFacebookページにて一部ご紹介しております。</p>
          <p class="fbBtn"><a href="https://www.facebook.com/nokuchikichi/" target="_blank">ノクチ基地 Facebookページ</a></p>
          <?php if(0) { ?>
          <ul>
            <?php
                $args = array(
                    'posts_per_page' => 8,
                    'category_name' => 'work',
                    'orderby' => 'ASC'
                );
            ?>
            <?php $query = new WP_Query( $args ); ?>
            <?php if($query -> have_posts()): ?>
            <?php while($query -> have_posts()): $query->the_post();?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <figure><?php the_post_thumbnail(); ?></figure>
                  <p class="postTitle"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <?php } ?>
        </nav>
      </section>
    </div>
    <!-- /mainContent -->
<?php get_footer(); ?>