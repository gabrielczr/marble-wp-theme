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
            <h1 class="post-title"><?php the_title(); ?></h1>
          </header>

          <div class="post-content">

            <?php the_content(); ?>
          </div>

        </article>
      <?php
      }
    }
    ?>
  </div>
</section>

<?php
get_template_part('template_parts/latest-post');

?>




<?php
get_footer();
?>