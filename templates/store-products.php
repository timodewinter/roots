{% paginate products from products.all by 99 %}

<section id="products" class="products-overview">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="h-1 text-center primary">Give Someone a Sausage</h1>
          </div>
          {% if products != blank %}
            {% for product in products %}
              <div class="col-sm-4 product-thumb text-center">
                <a href="{{ product.url }}">
                  <figure>
                    <img src="{{ product.image | product_image_url: theme.product_list_size }}" alt="Image of {{ product.name | escape }}" class="img-responsive">
                  </figure>
                  <h3>{{ product.name }}</h3>
                  <span class="price {% if product.on_sale %}sale{% endif %} {{ product.status }}">
                    {{ product.default_price | money_with_sign }}
                      {% case product.status %}
                        {% when 'sold-out' %} / Sold Out
                        {% when 'coming-soon' %} / Coming Soon
                        {% when 'active' %} {% if product.on_sale %} / On Sale{% endif %}
                      {% endcase %}
                  </span>
                </a>
              </div><!-- .product-thumb -->
            {% endfor %}


            <p class="col-xs-12 pagination">
              {% if paginate.previous %}
                {% if paginate.previous.is_link %}
                  <a href="{{ paginate.previous.url }}" class="previous circle">&larr; Previous</a>
                {% endif %}
              {% endif %}
      
              {% if paginate.next %}
                {% if paginate.next.is_link %}
                 <a href="{{ paginate.next.url }}" class="next circle">&rarr; Next</a>
                {% endif %}
              {% endif %}
            </p>

          {% else %}
      
            <p class="alert noproducts">
              No products found.
            </p>
      
          {% endif %}

            
        </div><!-- .row -->
      </div><!-- .col-sm-10.col-sm-offset-1 -->
    </div><!-- .row -->
  </div><!-- .container -->
</section>

{% endpaginate %}