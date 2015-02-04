<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">

  <link rel="shortcut icon" href="<?php echo(get_theme_mod( 'mytheme_favicon', '' )); ?>" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon', '' )); ?>"> <!-- Default -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon_76', '' )); ?>" sizes="76x76"/> <!-- iPad -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon_120','' )); ?>" sizes="120x120"/> <!-- iPhone/iPod retina -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon_152','' )); ?>" sizes="152x152"/> <!-- iPad retina -->

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

  <?php wp_head(); ?>
</head>
