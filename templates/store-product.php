<section id="product" class="product-details">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="h3 text-center primary">
              {{ product.name }}
              
              {% case product.status %}
              {% when 'sold-out' %}
                <p class="price sold-out">
                  {{ product.default_price | money_with_sign }}
                  <i>/ Sold Out</i>
                </span>
              
              {% when 'coming-soon' %}
                <span class="price coming-soon">
                  {{ product.default_price | money_with_sign }}
                  <i>/ Coming Soon</i>
                </span>
              
              {% when 'active' %}
                <span class="price {% if product.on_sale %}sale{% endif %}">
                  {{ product.default_price | money_with_sign }}
                  {% if product.on_sale %}
                    <i>/ On Sale</i>
                  {% endif %}
                </span>
              {% endcase %}
            </h1>
            <div class="product-gallery">
              <div class="royalSlider rsDefaultInv">
                {% for image in product.images offset:0 %}
                  <a class="rsImg" href="{{ image | product_image_url }}"></a>
                {% endfor %}
              </div>	
            </div>
          </div>
          <div class="col-sm-6 col-sm-offset-3">
            <div class="product-description">
              {% for artist in product.artists %}
                {% if forloop.first %}<p class="artists"> by {% endif %}
                {% if forloop.last and forloop.length > 1 %} and {% endif %}
                {{ artist.name }}
                {% if forloop.length > 2 %}, {% endif %}
                {% if forloop.last %}</p>{% endif %}
              {% endfor %}

              {{ product.description | paragraphs }}
            </div>
          </div>
          <div class="col-sm-4 col-sm-offset-4">
            
            {% if product.status == 'active' %}
              <form method="post" action="/cart">
                <div class="row">
                {% if product.has_default_option %}
                  {{ product.option | hidden_option_input }}
                {% else %}
                    <div class="col-sm-6">
                      <div class="styled-select">
                        {{ product.options_in_stock | options_select }}
                      </div>
                    </div><!-- .col-sm-6 -->
                {% endif %}
                    <div class="col-sm-6">
                      <div class="styled-input-container">
                        <label for="cart[add][quantity]">Qty</label>
                        <span class="styled-input">{{ product | product_quantity_input }}</span>
                      </div>
                    </div><!-- .col-sm-6 -->
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-sm btn-block btn-primary btn-sausage">Add to Cart</button>
                    </div>
                  </div>
                </form>
            {% endif %}
            
            
            {% if theme.show_inventory_bars %}
              {% case product.status %}
                {% when 'active' %}
                  <div class="availability">
                    <h5>Availability</h5>
                    <ul>
                      {% for option in product.options %}
                        <li>
                          {% unless product.has_default_option %}
                            {{ option.name }}
                          {% endunless %}
                          <i>
                            {% if option.sold_out %}
                              Sold Out
                            {% else %}
                              {{ option.inventory }}%
                            {% endif %}
                          </i>
                          <b class="option" style="width:{{ option.inventory }}%;"><!--Inventory--></b>
                        </li>
                      {% endfor %}
                    </ul>
                  </div>
              {% endcase %}
            {% endif %}
        
            
          </div>
      </div>
    </div>
  </div>
</section>