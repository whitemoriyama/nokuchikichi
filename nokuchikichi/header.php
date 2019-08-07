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
});
</script>
<?php wp_head(); ?>
</head>
<?php if(0) { ?>
<?php } ?>
<body <?php body_class(); ?>>
  <div id="mainWrapper">
    <div class="headerArea clearfix">
      <p class="siteTitle"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/headerlogo.svg" alt="<?php bloginfo('name'); ?>"></a></p>
    </div>