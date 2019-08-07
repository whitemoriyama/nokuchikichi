<?php

//+++++++++++++++++++++++++++++++++++++++
//アイキャッチ画像
add_theme_support('post-thumbnails');

//基本サイズ
set_post_thumbnail_size(300, 200, true);

//トップページサムネイル
add_image_size('top-size', 290, 220, true);

//+++++++++++++++++++++++++++++++++++++++
//pタグ削除
remove_filter('the_content', 'wpautop');

//+++++++++++++++++++++++++++++++++++++++
// メニューを非表示にする
function remove_menus () {
if (!current_user_can('')) { //level10以下のユーザーの場合メニューをunsetする
global $menu;
//unset($menu[5]); // 投稿
//unset($menu[15]); // リンク
//unset($menu[20]); // 固定ページ
unset($menu[25]); // コメント
//unset($menu[65]); // プラグイン
//unset($menu[70]); // ユーザー
//unset($menu[75]); // ツール
//unset($menu[80]); // 設定
}
}
add_action('admin_menu', 'remove_menus');

//+++++++++++++++++++++++++++++++++++++++
//カスタム投稿

//新着情報
//register_post_type(
//  'news',
//  array(
//    'label' => '新着情報',
//    'hierarchical' => false,
//    'public' => true,
//    'rewrite' => true,
//    'has_archive' => true,
//    'yarpp_support' => true,
//    'supports' => array(
//      'title',
//      'editor',
//      'excerpt',
//      'custom-fields',
//      'thumbnail',
//      'post-formats'
//    )
//  )
//);

//新着情報を分類するカスタムタクソノミー
//register_taxonomy(
//  'news-cat',
//  'news',
//  array(
//    'label' => 'カテゴリー',
//    'hierarchical' => true,
//    'update_count_callback' => '_update_post_term_count',
//    'singular_label' => 'カテゴリー',
//    'public' => true,
//    'show_ui' => true,
//    'rewrite' => array('slug' => 'news/category')
//  )
//);

//新着情報カテゴリーのリライトルール設定
//add_rewrite_rule('news/category/([^/]+)/?$', 'index.php?news-cat=$matches[1]', 'top');

//ブログ
//register_post_type(
//  'blog',
//  array(
//    'label' => 'MEMBER’S BLOG',
//    'hierarchical' => false,
//    'public' => true,
//    'rewrite' => true,
//    'has_archive' => true,
//    'yarpp_support' => true,
//    'supports' => array(
//      'title',
//      'editor',
//      'excerpt',
//      'custom-fields',
//      'thumbnail',
//      'post-formats'
//    )
//  )
//);

//ブログを分類するカスタムタクソノミー
//register_taxonomy(
//  'blog-cat',
//  'blog',
//  array(
//    'label' => 'カテゴリー',
//    'hierarchical' => true,
//    'update_count_callback' => '_update_post_term_count',
//    'singular_label' => 'カテゴリー',
//    'public' => true,
//    'show_ui' => true,
//    'rewrite' => array('slug' => 'blog/category')
//  )
//);

//ブログカテゴリーのリライトルール設定
//add_rewrite_rule('blog/category/([^/]+)/?$', 'index.php?blog-cat=$matches[1]', 'top');

//制作実績
//register_post_type(
//  'work',
//  array(
//    'label' => '制作実績',
//    'hierarchical' => false,
//    'public' => true,
//    'rewrite' => true,
//    'has_archive' => true,
//    'yarpp_support' => true,
//    'supports' => array(
//      'title',
//      'editor',
//      'excerpt',
//      'custom-fields',
//      'thumbnail',
//      'post-formats'
//    )
//  )
//);

//制作実績を分類するカスタムタクソノミー
//register_taxonomy(
//  'work-cat',
//  'work',
//  array(
//    'label' => 'カテゴリー',
//    'hierarchical' => true,
//    'update_count_callback' => '_update_post_term_count',
//    'singular_label' => 'カテゴリー',
//    'public' => true,
//    'show_ui' => true,
//    'rewrite' => array('slug' => 'work/category')
//  )
//);

//制作実績カテゴリーのリライトルール設定
//add_rewrite_rule('work/category/([^/]+)/?$', 'index.php?work-cat=$matches[1]', 'top');


//+++++++++++++++++++++++++++++++++++++++
// アーカイブに年月出力
function jp_date_wp_title( $title, $sep, $seplocation ) {
    if ( is_date() ) {
        $m = get_query_var('m');
        if ( $m ) {
            $year = substr($m, 0, 4);
            $month = intval(substr($m, 4, 2));
            $day = intval(substr($m, 6, 2));
        } else {
            $year = get_query_var('year');
            $month = get_query_var('monthnum');
            $day = get_query_var('day');
        }

        $title = ($seplocation != 'right' ? " $sep " : '') .
                 ($year ? $year . '年' : '') .
                 ($month ? $month . '月' : '') .
                 ($day ? $day . '日' : '') .
                 ($seplocation == 'right' ? " $sep " : '');
    }
    return $title;
}
add_filter( 'wp_title', 'jp_date_wp_title', 10, 3 );

//+++++++++++++++++++++++++++++++++++++++
//概要（抜粋）の文字数
function my_excerpt_mblength($length) {
  return 100;
}
add_filter('excerpt_mblength', 'my_excerpt_mblength');

//+++++++++++++++++++++++++++++++++++++++
//概要（抜粋）の省略記号
function my_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more' , 'my_excerpt_more');

//+++++++++++++++++++++++++++++++++++++++
//wp_headの編集
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

//+++++++++++++++++++++++++++++++++++++++
// カスタム投稿の月別アーカイブ
global $my_archives_post_type;
add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
  global $my_archives_post_type;
  if ( isset($r['post_type']) ) {
    $my_archives_post_type = $r['post_type'];
    $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'', $where );
  } else {
    $my_archives_post_type = '';
  }
  return $where;
}
add_filter( 'get_archives_link', 'my_get_archives_link' );
function my_get_archives_link( $link_html ) {
  global $my_archives_post_type;
  if ( '' != $my_archives_post_type )
    $add_link .= '?post_type=' . $my_archives_post_type;
  $link_html = preg_replace("/href=\'(.+)\'\s/","href='$1".$add_link." '",$link_html);

  return $link_html;
}


//+++++++++++++++++++++++++++++++++++++++
//SNS Share Button
if (!is_admin()) {
  $cssdir = get_stylesheet_directory_uri();
  // 自作スクリプトをページにリンク
  wp_enqueue_script( 'theme-script', $cssdir.'/script.js', array('jquery'));
}

//+++++++++++++++++++++++++++++++++++++++
//動的ページへのdescription設定
add_filter( 'aioseop_description', 'custom_aioseop_description' );
function custom_aioseop_description( $description ) {
  if ( is_post_type_archive('news') ) {
    $description = 'ノクチ基地の新着情報をお届けします';
  } else if ( is_post_type_archive('blog') ) {
    $description = 'ノクチ基地メンバーが制作日記から日常まで様々なことを綴ります';
  } else if ( is_post_type_archive('work') ) {
    $description = 'ノクチ基地のこれまでの制作実績のご紹介です';
  }
  return $description;
}

//+++++++++++++++++++++++++++++++++++++++
// ウィジェットを追加する
//if ( function_exists('register_sidebar') )
//	register_sidebar();

//+++++++++++++++++++++++++++++++++++++++
// ウィジェットタイトルをh2からh3に変更する
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' =>'</li>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
  ));
}

?>