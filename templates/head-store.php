<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">

  <link rel="shortcut icon" href="<?php echo(get_theme_mod( 'mytheme_favicon', '' )); ?>" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon', '' )); ?>"> <!-- Default -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon_76', '' )); ?>" sizes="76x76"/> <!-- iPad -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon_120','' )); ?>" sizes="120x120"/> <!-- iPhone/iPod retina -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo(get_theme_mod( 'mytheme_icon_152','' )); ?>" sizes="152x152"/> <!-- iPad retina -->

  {% if product != blank and page.full_url contains '/product/' %}
  <meta property="og:title" content="{{ product.name | escape }}">
  <meta property="og:type" content="product">
  <meta property="og:url" content="{{ page.full_url }}">
  <meta property="og:image" content="{{ product.image.url }}">
  <meta property="og:site_name" content="{{ store.name | escape }}">
  {% endif %}

  <?php wp_head(); ?>

  
  {{ head_content }}
  
</head>
