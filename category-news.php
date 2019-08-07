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
      <nav class="postArchive">
        <ul>
          <?php
          $paged = get_query_var('paged');
          query_posts($query_string . '&posts_per_page=10&paged=' . $paged);
          if (have_posts()): while (have_posts()): the_post();
          ?>
          <li class="clearfix">
            <a href="<?php the_permalink(); ?>">
              <figure class="archiveThumbnail"><?php the_post_thumbnail(); ?></figure>
              <div class="archiveText">
                <p class="archiveDate"><?php echo get_the_date('Y年m月d日'); ?></p>
                <p class="archiveTitle"><?php the_title(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile; endif; ?>
        </ul>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </nav>
      <?php if(0) { ?><?php } ?>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- /commonContent -->
  <?php get_footer(); ?>