<section id="locations" class="landing-section bg-primary">
  <div class="container">
    <div class="row locations">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="h5 text-center lead">Location</h2>
      </div><!-- .col-sm-4 -->
      <?php
       	// loop through the rows of data
        while ( have_rows('locations') ) : the_row();
      ?>

      <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 location">
        <h3 class="h0 text-center"><?php the_sub_field( 'title'); ?></h2>
        <figure class="text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/timberland-town-center.svg" class="svg img-responsive">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/timberland-town-center-clouds.svg" class="svg img-responsive location-clouds">
        </figure>
        <div class="row uc hours-address">
            <div class="col-sm-5 col-sm-offset-2 col-md-4">
              <h4>Hours</h4>
              <p>
                <?php the_sub_field( 'hours'); ?>
              </p>
            </div>
            <div class="col-sm-5 col-md-6">
              <h4>Address</h4>
              <p>
                <?php the_sub_field( 'address'); ?>
              </p>
            </div>
        </div><!-- .hours-address -->
        <div class="text-center">
          <a href="<?php the_sub_field( 'map_link'); ?>" target="_blank" class="btn btn-default btn-lg btn-sausage">View map</a>
        </div>
      </div>
      <?php
        endwhile;
      ?>
    </div>
  </div>
  <div class="animals text-center">
    <figure data-textballoon="Formerly Known As Burgers"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-beef.svg" class="svg img-responsive"><div class="text-balloon">Formerly Known As Burgers</div></figure>
    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-chicken.svg" class="svg img-responsive"><div class="text-balloon">Formerly Known As Nuggets</div></figure>
    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-pork.svg" class="svg img-responsive"><div class="text-balloon">Formerly Known As Bacon</div></figure>
    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-lamb.svg" class="svg img-responsive"><div class="text-balloon">Formerly Known As Lamb Chops</div></figure>
    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-fish.svg" class="svg img-responsive"><div class="text-balloon">Formerly Known As Fish Sticks</div></figure>
  </div>
</section>