<?php
/*
Template Name: Store - Cart
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php
    get_template_part('templates/store', 'header');
    get_template_part('templates/store', 'nav');
    get_template_part('templates/store', 'cart');
  ?>
<?php endwhile; ?>
