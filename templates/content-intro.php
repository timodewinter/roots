<section id="intro" class="text-center landing-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="dancing-sausages">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sausage-pork.svg" class="svg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sausage-lamb.svg" class="svg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sausage-turkey.svg" class="svg">
        </div>
      </div><!-- .col-sm-4 -->
      <div class="col-sm-4">
        <h2 class="primary h1"><?php the_field('intro_title'); ?></h2>
        <p class="h4 secondary ls0 book">
          <?php the_field('intro_text'); ?>
        </p>
      </div><!-- .col-sm-4 -->
      <div class="col-sm-4">
        <div class="dancing-sausages">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sausage-beef.svg" class="svg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sausage-chicken.svg" class="svg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sausage-pork.svg" class="svg">
        </div>
      </div><!-- .col-sm-4 -->
    </div>
  </div>
</section>