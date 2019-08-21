</main>
<!-- ./main -->

<?php if (is_front_page()) : ?>

  <section id="section-testimony">
    <blockquote class="wrapper">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque voluptatum, quibusdam temporibus voluptas repudiandae hic maiores eligendi repellendus, accusamus nobis laboriosam</p>
    </blockquote>
  </section>



  <!-- ./testimony -->

<?php endif; ?>

<footer class="main-footer">
  <div class="wrapper">
    <div class="container">


      <?php dynamic_sidebar('footer-sidebar')
      ?>







    </div>


    <hr />

    <p class="copyrights">
      &copy; 2016 Marble. All rights reserved. Theme by elemis.
    </p>
    <!-- ./copyrights -->
  </div>
</footer>
<!-- ./main-footer -->
<?php wp_footer(); ?>
</body>

</html>