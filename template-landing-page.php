<?php
/*
Template Name: Landing Page
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/header', 'landing'); ?>
  <?php get_template_part('templates/header'); ?>
  <?php get_template_part('templates/content', 'intro'); ?>
  <?php get_template_part('templates/content', 'store'); ?>
  <?php get_template_part('templates/content', 'menu'); ?>
  <?php get_template_part('templates/content', 'locations'); ?>
<?php endwhile; ?>
