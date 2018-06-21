<?php
/*
  Template Name: about
*/
?>

<?php get_header(); ?>

<section class="fullPanel intro" data-aos="fade-left">
  <div class="row">
    <div class="col-xs-12">
      <div class="col-sm-12 col-md-6">
        <h1> <?php the_field('heading_one')?> </h1>
        <h2 class="h4"><?php the_field('heading_two')?></h2>
      </div>
      <div class="col-sm-12 col-md-6">
        <?php the_field('paragraph_text')?>
      </div>
    </div>
  </div>
</section>

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
