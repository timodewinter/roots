<footer class="content-info primary" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-sm-offset-1">
        <h4>Contact</h4>
        <a href="mailto:hello@clutchsausagery.com">hello@clutchsausagery.com</a><br>
        <a href="tel:+15037287243" class="phonenumber" data-toggle="tooltip" data-placement="right" title="503-7287243">503-sausage</a>
      </div>
      <div class="col-sm-4">
        <h4>Media Inquiries</h4>
        <a href="mailto:media@clutchsausagery.com">media@clutchsausagery.com</a><br>
      </div>
      <div class="col-sm-3 text-right">
        <?php echo apply_filters('the_content','[socialbuttons]'); ?>
        <?php
            echo (get_field('instagram_url', 'options') ? '<a href="'.get_field('instagram_url', 'options').'" target="_blank">'.get_field('instagram_handle', 'options').'</a>' : '');
        ?>
      </div>
      <div class="col-sm-10 col-sm-offset-1">
        <div class="h6 tiny copyright">&copy; <?php echo date('Y'); ?> Clutch Sausagery. All rights reserved. Clutch &reg; is a registered trademark of Clutch Prime Sausagery.</div>
      </div>
    </div><!-- .row -->
  </div>
</footer>
