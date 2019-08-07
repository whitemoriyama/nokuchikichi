<?php get_header(); ?>
  <div class="breadWrap">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div id="commonContent">
    <header id="commonHeader">
      <div id="commonHeaderInner">
        <h2 class="commonHeaderTitle mincho">News</h2>
      </div>
    </header>
    <div id="pageContent" class="clearfix">
      <section class="postSingle">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="postHeader">
          <h3 class="postTitle"><?php the_title(); ?></h3>
          <nav class="postDetail">
            <ul>
              <li class="singlePostDate"><?php echo get_the_date('Y年m月d日'); ?></li>
              <li class="authorName"><?php the_author_posts_link(); ?></li>
            </ul>
          </nav>
        </div>
        <div class="articleContent clearfix">
          <div class="articleInner"><?php the_content(); ?></div>
        </div>
        <?php endwhile; endif; ?>
        <nav class="postnav clearfix">
          <ul>
            <li class="prev-post"><?php previous_post_link('%link','前の記事を見る'); ?></li>
            <li class="archive-post"><a href="<?php echo home_url(); ?>/news/">記事一覧に戻る</a></li>
            <li class="next-post"><?php next_post_link('%link','次の記事を見る'); ?></li>
          </ul>
        </nav>
        <?php get_template_part('fblink'); ?>
      </section>
      <?php if(0) { ?><?php } ?>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- /commonContent -->
  <?php get_footer(); ?>