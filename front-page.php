<?php
get_header();
?>


<section class="jumbotron">
	<div class="wrapper">
		<h2>We are digital &amp; branding agency based in London.</h2>
		<h3>We love to turn great ideas into beautiful products.</h3>
		<a href="#" class="button">See portfolio</a>
	</div>
</section>
<!-- ./jumbotron -->


<section id="section-icons" class="wrapper">
	<div class="container">


		<div class="col">
			<i class="icon lamp"></i>
			<h4>Pellentesque</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
		</div>
		<!-- ./col1 -->
		<div class="col">
			<i class="icon clock"></i>
			<h4>Consectetur</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
		</div>
		<!-- ./col2 -->
		<div class="col">
			<i class="icon flask"></i>
			<h4>Tristiquet</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
		</div>
		<!-- ./col3 -->
		<div class="col">
			<i class="icon ticket"></i>
			<h4>Fermentum</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
		</div>
		<!-- ./col4 -->
	</div>

	<hr />

</section>

<?php
get_template_part('template_parts/latest-post');

?>
<!--
<section id="section-latest-work" class="wrapper">
	<h3>Our latest works</h3>
	<div class="container">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'post_status' => 'published'
		);
		$query = new WP_Query($args);

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
						} else { }
						wp_reset_postdata();

						?>
	
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

	
	</div>
</section>
-->

<?php
get_footer();
?>