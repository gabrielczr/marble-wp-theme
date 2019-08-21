<?php
get_header();
?>


<section class="page-content">
  <div class="wrapper">

    <div class="container project-container">

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
                  the_post_thumbnail('marble-resized-380');
                } ?></div>

            </div>

          </article>
        <?php
        } // end while
      } // end if
      ?>
    </div>
    <footer class='post-navigation'>
      <?php posts_nav_link(' | ', '< previous page', 'next page >'); ?>
    </footer>
  </div>
</section>




<?php
get_footer();
?>