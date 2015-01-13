<section id="cart" class="cart-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        {% if cart.items != blank %}
        <form id="cart_form" method="post" action="/cart">
          <div class="row">
            <div class="col-sm-8">
              <input type="hidden" name="utf8" value="✓">
              <div id="cart_description">
                <section id="cart_items" class="cart-items">
                  <table>
                  {% for item in cart.items %}
                    <tr class="cart-item cart_item {% unless item.product.has_default_option %} with_option{% endunless %}" data-item-id="{{ item.id }}">
                      <td class="col-xs-2">
                        <img src="{{ item.product.image | product_image_url: "medium" }}" alt="Photo of {{ item.name }}" class="img-responsive">
                      </td>
                      <td class="col-xs-7">
                        <h4><a href="{{ item.product.url }}">{{ item.product.name }}</a></h4>
                        <div class="item_price price"><span class="currency_sign">{{ item.unit_price | money_with_sign }}{% if item.quantity > 1 %}<span class="item_quantity">(x{{ item.quantity }})</span>{% endif %}</div>
                        {% unless item.product.has_default_option %}<div class="item_option h6">{{ item.option.name }}</div>{% endunless %}
                      </td>
                      <td class="col-xs-2 text-right">
                        <span class="quantity_input">{{ item | item_quantity_input }}</span>
                        <a href="#" class="remove_item remove" title="Remove item from cart" data-item-id="{{ item.id }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                      </td>
                    </tr>
                  {% endfor %}
                  </table>
                </section>
            
                {% if cart.discount.enabled %}
                  <li class="discount">
        
                    {% if cart.discount.pending %}
                      <div class="col1">
                        <p class="label">
                          <label for="cart_discount_code">Have a discount code?</label>
                          {{ cart.discount | discount_code_input }}
                        </p>
                      </div>
                      <div class="col2">
                        <p class="value">
                          (optional)
                        </p>
                      </div>
                    {% elsif cart.discount.free_shipping %}
                      <div class="col1">
                        <p class="label">{{ cart.discount.name }}</p>
                      </div>
                    {% else %}
                      <div class="col1">
                        <p class="label">{{ cart.discount.name }}</p>
                      </div>
                      <div class="col2">
                        <p>{{ cart.discount.amount | money_with_sign }}</p>
                      </div>
                    {% endif %}
                  </li>
                {% endif %}
        
                {% if cart.shipping.enabled %}
                  <li class="shipping">
                    {% if cart.shipping.strict %}
                      <div class="col1">
                        <p class="label">
                          <label for="country">Shipping to:</label>
                          {{ store.country | country_select }}
                        </p>
                      </div>
                      <div class="col2">
                        <p class="cart_shipping_value not_mobile" {% if cart.shipping.pending %} style="display:none"{% endif %}>
                          {% unless cart.shipping.pending %}
                            {{ cart.shipping.amount | money_with_sign }}
                          {% endunless %}
                        </p>
                      </div>
                    {% else %}
                      <div class="col1">
                        <p class="label">Shipping:</p>
                      </div>
                      <div class="col2">
                        <p{% if cart.shipping.pending %} style="display:none"{% endif %}>
                          {% unless cart.shipping.pending %}
                            {{ cart.shipping.amount | money_with_sign }}
                          {% endunless %}
                        </p>
                      </div>
                    {% endif %}
                  </li>
                {% endif %}
        
                {% if cart.shipping.enabled %}
                  <li class="shipping_total mobile_only">
                    <div class="col1">
                      <p class="label">
                        Shipping:
                      </p>
                    </div>
                    <div class="col2">
                      <p class="cart_shipping_value">
                        {{ cart.shipping.amount | money_with_sign }}
                      </p>
                    </div>
                  </li>
                {% endif %}
                                
              </div>
            </div><!-- .col-sm-8 -->
            <div class="col-sm-4">            
              <section id="cart_summary" class="cart-summary">
                <ul>
                  {% if cart.shipping.enabled %}
                  <li id="cart-shipping-tax">
                    <h3>Shipping</h3>
                    {% if cart.shipping.pending %}
                      {% if cart.country %}
                      <span class="shipping-amount">Select another country</span>
                      {% else %}
                      <span class="shipping-amount">Select country</span>
                      {% endif %}
                    {% else %}
                      <span class="shipping-amount">{{ cart.shipping.amount | money_with_sign }}</span>
                    {% endif %}
                  </li>
                  {% else %}
                  <li id="cart-shipping-tax" class="not_set">
                    <h3>Shipping</h3>
                    <span>Applicable fees apply</span>
                  </li>
                  {% endif %}
            
                  {% if cart.discount.enabled %}
                    {% if cart.discount.pending %}
            
                    {% elsif cart.discount.free_shipping %}
                    <li>
                      <h3>Discount</h3>
                      <span>Free shipping!</span>
                    </li>
                    {% else %}
                    <li>
                      <h3>Discount</h3>
                      <span>-{{ cart.discount.amount | money_with_sign }}</span>
                    </li>
                    {% endif %}
                  {% endif %}
                  <li id="cart_total">
                    <h3>Total</h3>
                    <h2 class="total_price">{{ cart.total | money_with_sign }}</h2>
                  </li>
                </ul>
                <div class="text-center">
                  <button name="checkout" class="btn btn-sm btn-primary btn-sausage" type="submit" title="Checkout">Checkout</button>
                </div>
              </section>
              </div>
          </div><!-- .col-sm-4 -->
        </form>
        
        {% else %}
          <div id="cart_empty">
            <p>Your cart is empty! Sounds like a good time to <a href="/">start shopping</a>.</p>
          </div>
        {% endif %}
    </div><!-- .col-sm-10 -->
  </div><!-- .row -->
</section>