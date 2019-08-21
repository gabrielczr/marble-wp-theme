<?php
get_header();
?>


<section class="page-content">
	<div class="wrapper">

		<?php
		// display the posts/pages inside the main loop



		if (have_posts()) {
			while (have_posts()) {
				the_post();
				?>
				<article>
					<header>
						<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					</header>

					<div class="post-content">
						<div>
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('medium');
							} ?></div>
						<div><?php the_excerpt(); ?></div>
					</div>
					<footer>
						<p class="post-metas">
							<span class='meta-category'> Posted in: <?php the_category(', '); ?></span>
							<span class='meta-date'> at <?php echo get_the_date(); ?></span>
							<span class='meta-author'> by: <?php the_author(); ?></span>
						</p>
					</footer>
				</article>
			<?php
			} // end while
		} // end if
		?>
	</div>
</section>




<?php
get_footer();
?>