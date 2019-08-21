<?php
get_header();
?>


<section class="page-content">
  <div class="wrapper">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        ?>
        <article>
          <header>
            <h1 class="post-title"><?php the_title(); ?></h1>
          </header>

          <div class="post-content">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            } ?>
            <?php the_content(); ?>
          </div>
          <footer>
            <p class="post-metas">
              <span class='meta-category'> Posted in: <?php the_taxonomies(); ?></span>
              <span class='meta-date'> at <?php echo get_the_date(); ?></span>
              <span class='meta-author'> by: <?php the_author(); ?></span>
              <span class='meta-date'> in <?php echo the_terms(get_the_ID(), 'type', 'Types: ', ', ', ''); ?></span>

            </p>
            <p>
              <?php echo get_post_meta(get_the_ID(), 'project_client', true); ?>
              <?php echo get_post_meta(get_the_ID(), 'project_start_date', true); ?>
            </p>

            <p>
              Project date start: <?php the_field('project_start_date'); ?>

            </p>

            <div class="project-images">

              <p> <?php if (get_field('project_gallery_1')) : ?>

                  <img src="<?php the_field('project_gallery_1'); ?>" />

                <?php endif; ?> </p>
              <p> <?php if (get_field('project_gallery_2')) : ?>

                  <img src="<?php the_field('project_gallery_2'); ?>" />

                <?php endif; ?> </p>

              <p> <?php if (get_field('project_gallery_3')) : ?>

                  <img src="<?php the_field('project_gallery_3'); ?>" />

                <?php endif; ?> </p>
            </div>

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