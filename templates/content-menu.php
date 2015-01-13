          
          
<?php

// check if the repeater field has rows of data
if( have_rows('menus') ): ?>
        
<section id="menu" class="landing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2 class="h0 text-center primary">Menu</h2>
        <div class="row menus" id="menus">

          <?php
           	// loop through the rows of data
            while ( have_rows('menus') ) : the_row();
          ?>
          
          <div class="menu menu-<?php the_sub_field('type'); ?> col-sm-6">
            <div class="menu-name menu-name-<?php the_sub_field('type'); ?>"><span class="h3"><?php the_sub_field('name'); ?></span></div>
            <ul>
            <?php
             	// loop through the rows of data
              while ( have_rows('items') ) : the_row();
            ?>

              <li>
                <h3><?php the_sub_field('title'); ?> <span><?php the_sub_field('price'); ?></span></h3>
                <p>
                  <?php echo (get_sub_field('subtitle') ? get_sub_field( 'subtitle').'<br>' : ''); ?>
                  <?php echo (get_sub_field('description') ? '<em>'.get_sub_field( 'description').'</em>' : ''); ?>
                </p>
              </li>
            <?php
              endwhile;
            ?>
            </ul>
          </div><!-- .col-sm-6.menu -->
          <?php
            endwhile;
          ?>
        </div><!-- .row.menus -->
        <?php if(get_field( 'menu_link')){ ?>
        <div class="text-center">
          <a href="<?php the_field( 'menu_link'); ?>" target="_blank" class="btn btn-primary btn-lg btn-sausage">Order Online</a>
        </div>
        <?php } ?>
      </div><!-- .col-md-10.col-md-offset-1 -->
    </div><!-- .row -->
  </div><!-- .container -->
</section>
<?php
endif;
?>