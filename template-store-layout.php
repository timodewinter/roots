<?php
/*
Template Name: Store - Layout
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php
    get_template_part('templates/store', 'header');
    get_template_part('templates/store', 'nav');
  ?>
  
  {% if errors != blank %}
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <ul id="error" class="fade-in">
            {% for error in errors %}<li>{{ error }}</li>{% endfor %}
          </ul>
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.category == 'custom' %}
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <header class="product_header page_header">
            <h1>{{ page.name }}</h1>
            <span class="dash"></span>
          </header>
          <section id="page_body">
          {{ page_content | paragraphs }}
          </section>
        </div>
      </div>
    </div>
  {% else %}
    {{ page_content }}
  {% endif %}

  
<?php endwhile; ?>
