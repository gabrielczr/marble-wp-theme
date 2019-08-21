<section id="section-latest-work" class="wrapper">
  <h3>Our latest works</h3>
  <div class="container">

    <?php
    //create a custom request to the database
    //i want to retrieve the three latest posts informations
    //thumbnail, title, categories, excerpt


    // The Query
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'post_status' => 'published'
    );
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {

      while ($query->have_posts()) {
        $query->the_post(); ?>
        <article class="col">
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail('marble-resized-380', array('alt' => get_the_title()));
          } else { ?><img src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="Business Card">
          <?php } ?>
          <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
          <h5><?php the_category(', '); ?></h5>
          <p><?php the_excerpt(); ?></p>
        </article>
      <?php

      }
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    ?>
    <!--
		<article class="col">
			<img src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="Business Card">
			<h4>Nobis Business Card</h4>
			<h5>Business Cards, Graphics</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</article>

		<article class="col">
			<img src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="New fun project">
			<h4>New fun project</h4>
			<h5>Webdesign, Application</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</article>

		<article class="col">
			<img src="<?php echo get_template_directory_uri(); ?>/img/image3.jpg" alt="Passionaries Branding Cover">
			<h4>Passionaries Branding Cover</h4>
			<h5>Branding, Graphic Design</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</article>

	-->
  </div>
</section>