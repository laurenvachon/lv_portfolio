<!-- Homepage template -->

<?php get_header(); ?>

<section class="hero" id="section1">
  <div class="text col-xs-12">
    <h1 data-aos="fade-right"><?php the_field('heading_one')?></h1>
    <h2 data-aos="fade-left"> <?php the_field('heading_two')?></h2>
  </div>
  <a href="#section2" class="arrowButton soSmooth"><i class="fa fa-long-arrow-down arrowDown" aria-hidden="true"></i></a>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
