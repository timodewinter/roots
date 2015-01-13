<section id="nav">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
          <div class="col-xs-5 omega">
            {% if page.full_url contains '/product' %}
            <a href="/" class="btn btn-default btn-tall visible-xs"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left-ff6b00.svg" class="svg svg-include arrow-left"> Back</a>
            <a href="/" class="btn btn-default btn-tall hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left-ff6b00.svg" class="svg svg-include arrow-left"> Back to Products</a>
            {% endif %}
          </div>
          <div class="col-xs-7 alpha text-right">
            <a href="/cart" class="btn btn-default btn-tall btn-cart"><span class="count">{{ cart.item_count }} items</span><span class="total total_price">{{ cart.total | money_with_sign }}</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopping-cart.svg" class="svg svg-include"> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>