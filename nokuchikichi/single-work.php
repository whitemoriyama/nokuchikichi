<?php get_header(); ?>
  <div class="breadWrap">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div id="commonContent">
    <header id="commonHeader">
      <div id="commonHeaderInner">
        <h2 class="commonHeaderTitle mincho">制作実績</h2>
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
        <div id="commonPostNavi" class="clearfix">
          <div class="postLeftNavi">
            <p class="prevPost"><?php previous_post_link('%link','前の記事を見る'); ?></p>
          </div>
          <div class="postCenterNavi">
            <p class="returnLinkBtn"><a href="<?php echo home_url(); ?>/work/">制作実績一覧に戻る</a></p>
          </div>
          <div class="postRightNavi">
            <p class="nextPost"><?php next_post_link('%link','次の記事を見る'); ?></p>
          </div>
        </div>
        <?php get_template_part('fblink'); ?>
      </section>
      <?php if(0) { ?><?php } ?>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- /commonContent -->
  <?php get_footer(); ?>