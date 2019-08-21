<?php
/*
  Template Name: Page with sidebar
*/


get_header();
?>


<section class="page-content">
  <div class="wrapper">

    <div class="container">

      <div class="main-column">

        <?php
        // display the posts/pages inside the main loop



        if (have_posts()) {
          while (have_posts()) {
            the_post();
            ?>
            <article>
              <section class="entry">
                <div class='post-thumbnail'>
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } ?></div>
                <div class='post-content'>
                  <h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p class="post-metas">
                    <span class='meta-category'> Posted in: <?php the_category(', '); ?></span>
                    <span class='meta-date'> at <?php echo get_the_date(); ?></span>
                    <span class='meta-author'> by: <?php the_author(); ?></span>
                  </p>
                  <p class="post-excerpt"><?php the_content(); ?> </p>
                  <a href="<?php the_permalink(); ?>">Read more...</a>
                </div>
              </section>
            </article>
            <hr>





          <?php
          } // end while
        } // end if
        ?>

        <footer class='post-navigation'>
          <?php posts_nav_link(' | ', '< previous page', 'next page >'); ?>
        </footer>
      </div>


      <div class="sidebar-column">
        <p>Sidebar Content Here</p>
        <?php //get_sidebar('main-sidebar') 
        ?>
        <?php dynamic_sidebar('main-sidebar') ?>
      </div>


    </div>
  </div>
</section>




<?php
get_footer();
?>